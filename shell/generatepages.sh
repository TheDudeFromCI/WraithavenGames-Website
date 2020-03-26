#!/bin/bash
function mkfile() {
    mkdir -p $(dirname "$1") && touch "$1"
}

function solve() {
    if [[ $1 =~ ^\# ]]; then
        return
    fi

    if grep -Fxq "$1" t2.txt; then
        return
    fi

    echo $1 >>t2.txt
    if [[ $1 =~ .+\..+ ]]; then
        path=docs/$1
        echo Generating \'$path\'

        mkfile $path
        cp src/$1 $(dirname "$path")
    else
        path=docs/$1.html
        echo Generating \'$path\'

        mkfile $path
        php src/index.php $1 >>$path
        cat $path | grep "href=\"\|src=\"" | grep -vP "https?:\/\/" | grep -oP "(?<=href=\"|src=\")[^\"]*" >>t1.txt
    fi
}

echo 'index' >t1.txt
echo '' >t2.txt

rm -r docs
mkdir docs

while [ -s t1.txt ]; do
    line=$(head -n 1 t1.txt)
    sed -i 1d t1.txt
    solve $line
done

rm t1.txt
rm t2.txt

echo -n 'wraithavengames.net' >docs/CNAME

const fs = require('fs');
let path = process.argv[2];
let type = "."
type += process.argv[3];

fs.readdir(path, function callback(err, list) {
    for (var i = 0; i < list.length; i++) {
        var test = "";
        listFile = list[i];
        for (var j = type.length; j > 0; j--) {
            test += listFile[(listFile.length - j)];
        }
        if ((test.localeCompare(type) == 0)) {
            console.log(list[i]);
        }
    }

});

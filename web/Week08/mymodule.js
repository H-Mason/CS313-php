var fs = require('fs');
module.exports = function (path, type, callback) {
    var ext = "." + type;
    var newList = [];
    fs.readdir(path, function (err, list) {
        if(err){
            return callback(err);
        }
        for (var i = 0; i < list.length; i++) {
            var test = "";
            listFile = list[i];
            
            for (var j = ext.length; j > 0; j--) {
                test += listFile[(listFile.length - j)];
            }
            if ((test.localeCompare(ext) == 0)) {
                newList.push(listFile);
            }
        }
    callback(null, newList);
    })
}

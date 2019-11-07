//console.log(process.argv);
let array = process.argv;
let num = 0;
for(let i = 2; i < array.length; i++) {
    num += +array[i];
}
console.log(num);
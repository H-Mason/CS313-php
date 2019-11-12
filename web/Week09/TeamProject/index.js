const express = require('express')
const path = require('path')
const PORT = process.env.PORT || 5000

express()
  .use(express.static(path.join(__dirname, 'public')))
  .set('views', path.join(__dirname, 'views'))
  .set('view engine', 'ejs')
  .get('/', (req, res) => res.render('pages/index'))
  .get('/math', handleInput)
  .listen(PORT, () => console.log(`Listening on ${ PORT }`))

  function handleInput(req, res) {
    const oper = req.query.oper;
    const op1 = Number(req.query.op1);
    const op2 = Number(req.query.op2);

    doMath(res, oper, op1, op2);
}

function doMath(res, oper, op1, op2) {
    //oper = oper.toLowerCase();
    let result = 0;
    switch (oper) {
        case '+':
            result = op1 + op2;
            break;
        case '-':
            result = op1 - op2;
            break;
        case '*':
            result = op1 * op2;
            break;    
        case '/':
            result = op1 / op2;
            break;
        default:
            oper = "nope";
            break;
    }
    const params = {operation: oper, left: op1, right: op2, result: result};

    res.render('pages/math', params);

}

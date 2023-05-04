//Se carga el modulo de mysql
const mysql= require('mysql')

const conection = mysql.createConnection(
    {
        host: 'localhost',
        user: 'Miguel',
        password: 'Miguel',
        database: 'usuarios'
    }
)

conection.connect((err)=>{
    if(err) throw err;
    console.log('Conectado a la base de datos')
})

conection.query('SELECT * FROM users', (err,rows)=>{
    if(err) throw err;
    console.log('Datos recibidos de la base de datos')
    console.log(rows)
    console.log('La cantidad de usuarios es: '+rows.length)
    console.log(rows.length)

})

conection.end()

let f1 = document.getElementById('f1');
let f2 = document.getElementById('f2');
let btn1 = document.getElementById('btn1');
let btn2 = document.getElementById('btn2');

f1.addEventListener('submit', function(e){
    if(document.getElementById('btn1')){
        e.preventDefault();

        let codigo = "";
        if(e.target[1].value !== "Dia semana"){
            btn1.remove();
            console.log(e);
            valor = e.target[1].value;
            codigo += "<br><label>Nombre dueño targeta</label><br><input type='text' required><br><label>Numero targeta</label><br><input type='number' required><br><label>Caducidad</label><br><input type='date' required><br><label>CVV</label><br><input type='number' required><br><button type='submit'>Boton</button/>";
            f1.innerHTML += codigo;
            e.target[1].value=valor;
            console.log(e.target[1].value);
            //console.log(valor);
        }
    }
})

f2.addEventListener('submit', function(e){
    if(document.getElementById('btn2')){
        e.preventDefault();

        let codigo = "";
        if(e.target[0].value !== "Dia semana" && e.target[1].value !== "Dia semana"){
            if(e.target[0].value!=e.target[1].value){
                btn2.remove();
                valor1=e.target[1].value;
                valor2=e.target[2].value;
                codigo += "<br><label>Nombre dueño targeta</label><br><input type='text' required><br><label>Numero targeta</label><br><input type='number' required><br><label>Caducidad</label><br><input type='date' required><br><label>CVV</label><br><input type='number' required><br><button type='submit'>Boton</button/>";
                f2.innerHTML += codigo;
                e.target[1].value=valor1;
                e.target[2].value=valor2;
            }
        }
    }
})

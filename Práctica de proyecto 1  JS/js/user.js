//La tabla se crearía así,pero no se come implenetarla bien con el input X 
let row_1 = document.createElement('tr');
let heading_1 = document.createElement('th');
heading_1.innerHTML = "Acciones";
let heading_2 = document.createElement('th');
heading_2.innerHTML = "Nombre";
let heading_3 = document.createElement('th');
heading_3.innerHTML = "Apellido";
let heading_4 = document.createElement('th');
heading_4.innerHTML = "Email";
let heading_5 = document.createElement('th');
heading_5.innerHTML = "Telefono";
let heading_6 = document.createElement('th');
heading_6.innerHTML = "Sexo";


row_1.appendChild(heading_1);
row_1.appendChild(heading_2);
row_1.appendChild(heading_3);
row_1.appendChild(heading_4);
row_1.appendChild(heading_5);
row_1.appendChild(heading_6);

thead.appendChild(row_1);



let row_2 = document.createElement('tr');
let row_2_data_1 = document.createElement('td');
row_2_data_1.innerHTML = "X";
let row_2_data_2 = document.createElement('td');
row_2_data_2.innerHTML = "Ekaterina";
let row_2_data_3 = document.createElement('td');
row_2_data_3.innerHTML = "Adarchenko";
let row_2_data_4 = document.createElement('td');
row_2_data_4.innerHTML = "eadarchenko@gmail.com";
let row_2_data_5 = document.createElement('td');
row_2_data_5.innerHTML = "611296060";
let row_2_data_6 = document.createElement('td');
row_2_data_6.innerHTML = "F";

row_2.appendChild(row_2_data_1);
row_2.appendChild(row_2_data_2);
row_2.appendChild(row_2_data_3);
row_2.appendChild(row_2_data_4);
row_2.appendChild(row_2_data_5);
row_2.appendChild(row_2_data_6);
tbody.appendChild(row_2);



let row_3 = document.createElement('tr');
let row_3_data_1 = document.createElement('td');
row_3_data_1.innerHTML = "X";
let row_3_data_2 = document.createElement('td');
row_3_data_2.innerHTML = "Angelina";
let row_3_data_3 = document.createElement('td');
row_3_data_3.innerHTML = "Jolie";
let row_3_data_4 = document.createElement('td');
row_3_data_4.innerHTML = "angelinajolie@gmail.com";
let row_3_data_5 = document.createElement('td');
row_3_data_5.innerHTML = "659234585";
let row_3_data_6 = document.createElement('td');
row_3_data_6.innerHTML = "F";

row_3.appendChild(row_3_data_1);
row_3.appendChild(row_3_data_2);
row_3.appendChild(row_3_data_3);
row_3.appendChild(row_3_data_4);
row_3.appendChild(row_3_data_5);
row_3.appendChild(row_3_data_6);

tbody.appendChild(row_3);
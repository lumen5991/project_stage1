function addTableau() {
  let last_Name = document.getElementById("last_Name").value;
  let first_name = document.getElementById("first_name").value;
  let old = document.getElementById("old").value;
  let adress = document.getElementById("adress").value;
  let email = document.getElementById("email").value;
  let description = document.getElementById("description").value;


  if (last_Name === "" || first_name === "" || old === "" || adress === "" || email === "" || description === "") {
    alert("Veuillez remplir tous les champs du formulaire.");
    return; 
}

  var tableauBody = document.querySelector(".tableauBody");
  let newRow = document.createElement("tr");
  newRow.innerHTML = `
      <td>${last_Name}</td>
      <td>${first_name}</td>
      <td>${old}</td>
      <td>${adress}</td>
      <td>${email}</td>
      <td>${description}</td>
  `;

  tableauBody.appendChild(newRow);

  last_Name = "";
  first_name = "";
  old = "";
  adress = "";
  email = "";
  description = "";
  
}

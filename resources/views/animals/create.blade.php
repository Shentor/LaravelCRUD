</<!DOCTYPE html>
<html>
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>
 
<h1>Créer un animal</h1>
 
<div class="container">
 
    <form method="POST" action="/animals">
 
        {{ csrf_field() }}
 
       <div>
          <label >Nom de l'animal</label>
          <input type="text" name="animal_name" placeholder="Nom" required>
 
      </div>
     
        
        
        <div>
        <label for="animal_type">Type de l'animal:</label>
                
                <select id="choiceType" name="animal_type" onchange="change()">
                    <option selected value="Choisissez" disabled>Choisissez</option>
                    <option value="Reptile">Reptile</option>
                    <option value="Mammifere">Mammifère</option>
                    <option value="Oiseau">Oiseau</option>
                </select>
        </div>
        
        
        <?php echo("<script> 
                    function change(){
                    let valueType = document.getElementById(\"choiceType\");
                    let valueOpt = valueType[valueType.selectedIndex].value;
                    let field = document.getElementById(\"descriptionLabel\");
                    let valueSkin = document.getElementById(\"skinInv\");
                    
                        
                    if (valueOpt == \"Reptile\"){
                        field.innerHTML = \"Ses écailles sont:\";
                        valueSkin.value = \"mes écailles sont\";
                    }
                    
                    else if (valueOpt == \"Mammifere\"){
                        field.innerHTML = \"Sa fourrure est:\";
                        valueSkin.value = \"ma fourrure est\";
                    }
                    
                    else if (valueOpt == \"Oiseau\"){
                        field.innerHTML = \"Son plumage est:\";
                        valueSkin.value = \"mon plumage est\";
                    }
                    
                    }
                    
                    
        </script>");?>
        
        
        

      <div>
            
            <textarea id="skinInv" hidden name="animal_skin" placeholder="Peau" required></textarea>
 
      </div>

        <div>
            <label id="descriptionLabel" ></label>
            <textarea name="animal_description" placeholder="Description" required></textarea>
 
      </div>
      <div>
 
            <input type="submit" value="Ajouter Animal">
 
      </div>
 
    </form>  
 
 </div>   
 
</body>
</html>
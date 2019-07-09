@extends('layout')
 
@section('content')
 
    <h1 class="title"> Modifier animal </h1>
 
    <form method="POST" action="/animals/{{ $animals->id }}">
 
    @method('PATCH')
    @csrf
 
 
        <div class="field">
 
            <label class="label" for="animal_name">Nom </label>
 
            <div class="control">
 
                <input type="text" class="input" name="animal_name" placeholder="Nom" value="{{ $animals->animal_name }}" required>
        
            </div>
       
        </div>
        
        
        <div class="field">
 
            <label class="label" for="animal_type">Type </label>
 
            <div class="control">
 
                <select id="choiceType" name="animal_type" onchange="change()">
                    <option selected value="{{ $animals->animal_type }}">{{ $animals->animal_type }}</option>
                    <option value="Reptile">Reptile</option>
                    <option value="Mammifere">Mammifère</option>
                    <option value="Oiseau">Oiseau</option>
                </select>
        
            </div>
       
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
        
        <div hidden class="field">
 
            
 
            <div class="control">
 
                <input id="skinInv" type="text" class="input" name="animal_skin" placeholder="Peau" value="{{ $animals->animal_skin }}" required>
        
            </div>
       
        </div>
        
        <div class="field">
 
            <label id="descriptionLabel" class="label" for="animal_description">Description </label>
 
            <div class="control">
 
                <input type="text" class="input" name="animal_description" placeholder="description" value="{{ $animals->animal_description }}" required>
        
            </div>
       
        </div>
 
        <div class="field">
 
            <div class="control">
 
                <button type="submit" class="button is-link">Mise a jour</button>
 
            </div>
 
        </div>
 
    </form><br> 
 
    <form method="POST" action="/animals/{{ $animals->id }}">
 
    @method('DELETE')
    @csrf
 
 
        <div class="field">
 
            <div class="control">
 
                <button type="submit" class="button is-link">Supprimer animal</button>
 
            </div>
 
        </div>         
 
    </form>
 
 
 @endsection
<div class="container">
      <h1 class="display-4 text-center"> Oblicz swoje BMI!</h1>
      
          
          <div class="form-group w-25 mx-auto text-center">
            <label for="waga" class="mr-sm-2">Twoja waga: (w kg)</label>
              <input type="number" class="form-control mb-2 mr-sm-2" id="waga">
            </div>
          
          <div class="form-group w-25 mx-auto text-center">
               <label for="wzrost" class="mr-sm-2">Twój wzrost: (w cm)</label>
              <input type="number" class="form-control mb-2 mr-sm-2" id="wzrost">
            </div>
          
          <div class="text-center">
              <button class="btn btn-primary" onClick="liczBMI()">Oblicz!</button> 
          </div>
          
          <div class="text-center mx-auto mt-3 "> <p class="display-4" id="userBMI"> Twoje BMI: 0 </p> </div>
        
</div>

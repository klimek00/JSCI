let proteinPer = null;
let carbonhydratesPer = null;
let fatsPer = null;

function calcKCAL() {

  let sex = document.getElementById('sexk').value;
  let age = document.getElementById('agek').value;
  let growth = document.getElementById('grwk').value;
  let weight = document.getElementById('wghk').value;
  let active = document.getElementById('activek').value;
  let goal = document.getElementById('goalk').value;

  let bmr = null;
  let cpm = null;
  let perfectWeight = null;

  //cpm
  if (age != "" && growth != "" && weight != "") {
    if (sex == 'm') {
      bmr = (9.99 * weight + 6.25 * growth - 4.92 * age) + 5;
    } else if (sex == 'f') {
      bmr = (9.99 * weight + 6.25 * growth - 4.92 * age) - 161;
    }
    cpm = (parseInt(bmr) * active) + Number(goal);
    document.getElementById('bmrresult').innerHTML = parseInt(bmr) + " kcal";
    if (goal == '-300') {
      document.getElementById('cpmdesc').innerHTML = "Aby zrzucić kilogramy (0.5 kg tygodniowo) dzienne zapotrzebowanie kaloryczne wynosi*:";
    } else if (goal == '0') {
      document.getElementById('cpmdesc').innerHTML = "Aby utrzymać wagę dzienne zapotrzebowanie kaloryczne wynosi*:";
    } else if (goal == '300') {
      document.getElementById('cpmdesc').innerHTML = "Aby zbudować masę dzienne zapotrzebowanie kaloryczne wynosi*:";
    }
     document.getElementById('cpmresult').innerHTML = parseInt(cpm) + ' kcal';
  //perfect weight

  if (growth <= 164) {
    perfectWeight = growth - 100;
  } else if (growth > 164 && growth <= 175) {
    perfectWeight = growth - 105;
  } else if (growth > 175 ) {
    perfectWeight = growth - 110;
  }
  document.getElementById('perfectWeightResult').innerHTML = perfectWeight+' kg';
  //resource
    let protein = parseInt(parseInt(cpm) * 0.15);
    let carbonhydrates = parseInt(parseInt(cpm) * 0.55);
    let fats = parseInt(parseInt(cpm) * 0.3);

    proteinPer = parseInt(protein / 4);
    carbonhydratesPer = parseInt(carbonhydrates / 4);
    fatsPer = parseInt(fats / 9);

    document.getElementById('%demand').innerHTML = "15% białka: " + protein + " kcal = " + proteinPer + "g.<br>55% węglowodanów: " + carbonhydrates + " kcal = " + carbonhydratesPer + "g.<br>30% tłuszczu: " + fats + " kcal = " + fatsPer + "g.";
  } else {
    alert("Uzupełnij wszystkie pola");
  }

  if (bmr != null && cpm != null) {
    document.getElementById('kcalresult').style.display = "block";
  }
}

function draw() {
  if (proteinPer != null && carbonhydratesPer != null && fatsPer != null) {
    let script = document.createElement('script');
    script.type = 'text/javascript';

    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js';
    document.body.appendChild(script);
    let ctx = document.getElementById('chart').getContext('2d');
    ctx.canvas.parentNode.style.height = '300px';
    ctx.canvas.parentNode.style.width = '500px';
    let chart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        datasets: [{
          data: [proteinPer, carbonhydratesPer, fatsPer],
          backgroundColor: ["#ff6666", "#1f77c4", "#d8e549"],
          weight: 10
        }],

        labels: [
          'Białko', 'Węglowodany', 'Tłuszcze'
        ],
      },
      options: {}
    });
  }
}

let proteing = null;
let carbonhydratesg = null;
let fatsg = null;

function calcKCAL() {

  let sex = document.getElementById('sexk').value;
  let age = document.getElementById('agek').value;
  let growth = document.getElementById('grwk').value;
  let weight = document.getElementById('wghk').value;
  let active = document.getElementById('activek').value;
  let goal = document.getElementById('goalk').value;
  let bmr = null;
  let cpm = null;
  let bmrresult = document.getElementById('bmrresult');
  let cpmresult = document.getElementById('cpmresult');

  if (age != "" && growth != "" && weight != "") {
    if (sex == 'm') {
      bmr = (9.99 * weight + 6.25 * growth - 4.92 * age) + 5;
    } else if (sex == 'f') {
      bmr = (9.99 * weight + 6.25 * growth - 4.92 * age) - 161;
    }
    cpm = (parseInt(bmr) * active) + Number(goal);
    bmrresult.innerHTML = parseInt(bmr) + " kcal";
    cpmresult.innerHTML = parseInt(cpm) + ' kcal';
    protein = parseInt(parseInt(cpm) * 0.15);
    carbonhydrates = parseInt(parseInt(cpm) * 0.55);
    fats = parseInt(parseInt(cpm) * 0.3);
    proteing = parseInt(protein / 4);
    carbonhydratesg = parseInt(carbonhydrates / 4);
    fatsg = parseInt(fats / 9);
    document.getElementById('%demand').innerHTML = "15% białka: " + protein + " kcal = " + proteing + "g.<br>55% węglowodanów: " + carbonhydrates + " kcal = " + carbonhydratesg + "g.<br>30% tłuszczu: " + fats + " kcal = " + fatsg + "g.";
  } else {
    alert("Uzupełnij wszystkie pola");
  }

  if (bmr != null && cpm != null) {
    document.getElementById('kcalresult').style.display = "block";
  }
}

function draw() {
  if (proteing != null && carbonhydratesg != null && fatsg != null) {
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
          data: [proteing, carbonhydratesg, fatsg],
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

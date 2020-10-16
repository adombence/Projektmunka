let ctx2 = document.getElementById('myChart2').getContext('2d');
let labels2 = [sorstalansagSzo[0], sorstalansagSzo[1], sorstalansagSzo[2], sorstalansagSzo[3], sorstalansagSzo[4], sorstalansagSzo[5], sorstalansagSzo[6], sorstalansagSzo[7], sorstalansagSzo[8], sorstalansagSzo[9]];
let colorHex2 = ['#FB3640', '#EFCA08', '#43AA8B', '#253D5B', '#a7ffeb', '#00ff44', '#0011ff', '#4a0722', '#e37fa7', '#03f8fc'];

let myChart2 = new Chart(ctx2, {
  type: 'pie',
  data: {
    datasets: [{
      data: [sorstalansagElo[0], sorstalansagElo[1], sorstalansagElo[2], sorstalansagElo[3], sorstalansagElo[4], sorstalansagElo[5], sorstalansagElo[6], sorstalansagElo[7], sorstalansagElo[8], sorstalansagElo[9]],
      backgroundColor: colorHex2
    }],
    labels: labels2
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom'
    },
    plugins: {
      datalabels: {
        color: '#fff',
        anchor: 'end',
        align: 'start',
        offset: -10,
        borderWidth: 2,
        borderColor: '#fff',
        borderRadius: 25,
        backgroundColor: (context) => {
          return context.dataset.backgroundColor;
        },
        font: {
          weight: 'bold',
          size: '15'
        },
        formatter: (value) => {
          return value;
        }
      }
    }
  }
})




const imgContent2 = document.querySelectorAll('.img-content-hover');

function showimgContent2(e) {
  for(var i = 0; i < imgContent2.length; i++) {
    x = e.pageX;
    y = e.pageY;
    imgContent2[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
  }
};

document.addEventListener('mousemove', showimgContent2);
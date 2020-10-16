let ctx = document.getElementById('myChart1').getContext('2d');
let labels = ['nem', 'már', 'csak', 'volt','ő','itt','én','volna','el','majd'];
let colorHex = ['#FB3640', '#EFCA08', '#43AA8B', '#253D5B','#a7ffeb','#00ff44','#0011ff','#4a0722','#e37fa7','#03f8fc'];

let myChart1 = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [1712, 584, 869, 817,230,275,436,268,404,97],
      backgroundColor: colorHex
    }],
    labels: labels
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




const imgContent = document.querySelectorAll('.img-content-hover');

function showImgContent(e) {
  for(var i = 0; i < imgContent.length; i++) {
    x = e.pageX;
    y = e.pageY;
    imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
  }
};

document.addEventListener('mousemove', showImgContent);
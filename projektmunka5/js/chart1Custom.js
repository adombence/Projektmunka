let ctx = document.getElementById('myChart1').getContext('2d');
let labels1 = [mu1szo[1], mu1szo[2], mu1szo[3], mu1szo[4], mu1szo[5], mu1szo[6], mu1szo[7], mu1szo[8], mu1szo[9], mu1szo[10]];
let colorHex1 = ['#FB3640', '#EFCA08', '#43AA8B', '#253D5B', '#a7ffeb', '#00ff44', '#0011ff', '#4a0722', '#e37fa7', '#03f8fc'];

/*for (var i = 0; i < 10; i++) {
    console.log(egricsillagokSzo[i]);
}*/
let myChart1 = new Chart(ctx, {
    type: 'pie',
    data: {
        datasets: [{
            data: [mu1elo[1], mu1elo[2], mu1elo[3], mu1elo[4], mu1elo[5], mu1elo[6], mu1elo[7], mu1elo[8], mu1elo[9], mu1elo[10]],
            backgroundColor: colorHex1
        }],
        labels: labels1
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
    for (var i = 0; i < imgContent.length; i++) {
        x = e.pageX;
        y = e.pageY;
        imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
    }
};

document.addEventListener('mousemove', showImgContent);
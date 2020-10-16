let ctx = document.getElementById('myChart1').getContext('2d');
let labels1 = [egricsillagokSzo[0], egricsillagokSzo[1], egricsillagokSzo[2], egricsillagokSzo[3], egricsillagokSzo[4], egricsillagokSzo[5], egricsillagokSzo[6], egricsillagokSzo[7], egricsillagokSzo[8], egricsillagokSzo[9]];
let colorHex1 = ['#FB3640', '#EFCA08', '#43AA8B', '#253D5B', '#a7ffeb', '#00ff44', '#0011ff', '#4a0722', '#e37fa7', '#03f8fc'];

/*for (var i = 0; i < 10; i++) {
    console.log(egricsillagokSzo[i]);
}*/
let myChart1 = new Chart(ctx, {
    type: 'pie',
    data: {
        datasets: [{
            data: [egricsillagokElo[0], egricsillagokElo[1], egricsillagokElo[2], egricsillagokElo[3], egricsillagokElo[4], egricsillagokElo[5], egricsillagokElo[6], egricsillagokElo[7], egricsillagokElo[8], egricsillagokElo[9]],
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
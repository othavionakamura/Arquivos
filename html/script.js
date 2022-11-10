const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [1990, 1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020],
        datasets: [{
            label: 'IDH',
            data: [0.613, 0.621, 0.627, 0.635, 0.642, 0.651, 0.658, 0.665, 0.670, 0.676, 0.685, 0.691, 0.699, 0.695, 0.698 ,0.700, 0.702, 0.706, 0.717, 0.719, 0.727, 0.731, 0.735, 0.753, 0.756, 0.756, 0.758, 0.761, 0.762, 0.765, 0.754],
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],
            borderColor: ['rgba(255, 99, 132, 1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'],
            borderWidth: 1
        },
        {
            label: 'PIB (TRI)',
            data: [7.9 ,4.1 ,4.3 ,0.09 , 2.29 , 4.57 ,5.44 , 5.95 , 6.13 ,6.52 ,1.19 , 1.31 , 1.48 , 1.71 , 1.95 , 2.17 ,2.40 , 2.72  ,3.10  ,3.33 , 3.88 ,4.37 , 4.81  ,5.33  ,5.77 ,5.99  ,6.26  ,6.28 ,7.04  ,7.1  ,7.4  ,8.7],
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],
            borderColor: ['rgba(255, 99, 132, 1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'],
            borderWidth: 1
        },
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
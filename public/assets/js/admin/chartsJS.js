let dataPoints = [
  { label: 'Java', value: 60 }, //1
  { label: 'C#', value: 30 },  //3
  { label: 'C++', value: 20 },  //4
  { label: 'Python', value: 40 },  //2
];

dataPoints.sort((a, b) => a.value - b.value);

let labels = dataPoints.map(point => point.label);
let values = dataPoints.map(point => point.value);

const ctx1 = document.getElementById("chart-1").getContext("2d");
const myChart = new Chart(ctx1, {
  type: 'pie', // Define the chart type
  data: {
    labels: labels, // Categories
    datasets: [{
      label: 'My First Dataset',
      data: values, // Data points for each category --- ascending order
      backgroundColor: [
        'rgb(76, 40, 182)',   //cpp 4
        'rgb(102, 37, 121)',  //csh 3
        'rgb(50, 126, 189)',   //py 2
        'rgb(200, 200, 200)'  //java 1      
      ],
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
          position: 'left',
      },
      title: {
          display: true,
          text: 'Badge Chart'
      }
    } // Makes the chart responsive
  }
});


const ctx2 = document.getElementById("chart-2").getContext("2d");
const myChart2 = new Chart(ctx2, {
  type: "bar",
  data: {
    labels: ["Java", "Python", "C#", "C++",],
    datasets: [
      {
        label: "Total EXP", 
        data: [22, 17, 12, 7],
        backgroundColor: [    
          'rgb(200, 200, 200)',  //java 1        
          'rgb(50, 126, 189)',   //py 2
          'rgb(102, 37, 121)',  //csh 3
          'rgb(76, 40, 182)'   //cpp 4
        ],
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
          position: 'left',
      },
      title: {
          display: true,
          text: 'EXP Points'
      }
    } // Makes the chart responsive
  }
});

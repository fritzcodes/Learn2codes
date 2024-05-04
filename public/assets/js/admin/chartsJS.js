var dataPoints = [];

function randomRGB() {
  return `rgb(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)})`;
}
$.ajax({
  url: '/admin/totalBadge',
  method: 'GET',
  dataType: 'json',
  success: function (data) {

    dataPoints = data;


    dataPoints.sort((a, b) => a.value - b.value);

    // Get labels and values after sorting
    let labels = dataPoints.map(point => point.label);
    let values = dataPoints.map(point => point.value);

    // Render the chart
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
  }
});

$.ajax({
  url: '/admin/totalCourse',
  method: 'GET',
  dataType: 'json',
  success: function (data) {
    console.log("data",data);
    
    var labels = [];
    var datas = [];
    data[0].forEach(element => {
      labels.push(element)
    });
    data[1].forEach(element => {
      datas.push(element);
    });
    const ctx2 = document.getElementById("chart-3").getContext("2d");
    const myChart2 = new Chart(ctx2, {
      type: "bar",
      data: {
        labels: labels,
          datasets: [
            {
              label: "Top 1",
              data: datas,
              backgroundColor: [
                randomRGB(),
                randomRGB(),
                randomRGB(),
                randomRGB()
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
            text: 'Course'
          }
        } // Makes the chart responsive
      }
    });

  },
  error: function (xhr){
    alert(xhr.responseText);
  }
})

$.ajax({
  url: '/admin/totalExp',
  method: 'GET',
  dataType: 'json',
  success: function (data) {
    var labels = [];
    var datas = [];
    data.forEach(element => {
      labels.push(element.label)
      datas.push(element.value);
    });
    const ctx2 = document.getElementById("chart-2").getContext("2d");
    const myChart2 = new Chart(ctx2, {
      type: "bar",
      data: {
        labels: labels,
        datasets: [
          {
            label: "Top 1",
            data: datas,
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
            text: 'Exp Points'
          }
        } // Makes the chart responsive
      }
    });

  }
})


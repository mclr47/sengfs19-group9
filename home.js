function getRepoGroupInfo() {
    
    $.get("http://augur.osshealth.io:5000/api/unstable/repo-groups", function(repodata, status){
        if (status == "success") {
            var repoGroups = repodata;
            var tops = [];
            var i = 0;
            var emails = [];
            var array = [];
            var data = new Array();
            //console.log(typeof(repoGroups));
            //var repogr = repoGroups[3];
            repoGroups.forEach((e) => {

                $.get("http://augur.osshealth.io:5000/api/unstable/repo-groups/" + e.repo_group_id + "/top-committers?threshold=1", function(committerData, status){

                    e.committers = committerData;
                    //e.committers.pop();
                    console.log(e.committers[0].commits);
                    data.push(e.committers[0].commits);
                    emails.push(e.committers[0].email);
                    tops.push(e.committers[0]);
                    //createGraph(e.committers[0].commits, e.committers[0].email);
                    e.totalCommits = 0;

                    //$("#sectionList").append('<li><a href="#'+ e.repo_group_id + '">'+ e.rg_name + '</a></li>');

                    //$("#sectionBody").append('<div id="'+ e.repo_group_id +'"></div>');
                    //$("#" + e.repo_group_id).append('<h1>' + e.rg_name + '</h1>');
                    //$("#" + e.repo_group_id).append('<canvas id="'+ e.repo_group_id +'-canvas"></canvas>');

                    //createGraph(e);
//                    console.log(typeof(data));

                });
            });
            //data.toString();
            //parseInt(data);
             console.log(tops[0]);
            var help = new Array(data);
            //console.log(help[0]["0"]);
            createGraph(tops);
            //console.log(data);
           // console.log(emails);
            
        }
    
    });
}

function createGraph(data) {
    var bgColors = [];
    console.log(typeof(data));
    //var data2 = [data];
            var data2 = [];
            data.forEach((e) => {
                 console.log(e);
                data2.push(e.commits);   
            });
    console.log(data2);
            var borderColors = [];
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            bgColors.push("rgba(" + r + "," + g + "," + b + ", 0.5)");
            borderColors.push("rgba(" + r + "," + g + "," + b + ", 0.7)");
            //var ctx = document.getElementById('canvas').getContext('2d');
			var ctx = document.getElementById("canvas");
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["1", "2", "3", "4", "5", "6", "7", "8"],
    datasets: [{
      label: 'Help',
      data: data2,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: false,
    scales: {
      xAxes: [{
        ticks: {
          maxRotation: 90,
          minRotation: 80
        }
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
}
function getRepoGroupInfo() {
    $.get("http://augur.osshealth.io:5000/api/unstable/repo-groups", function(repodata, status){
        if (status == "success") {
            var repoGroups = repodata;
            var repogr = repoGroups[3];
            //repogr.forEach((e) => {

                $.get("http://augur.osshealth.io:5000/api/unstable/repo-groups/" + repogr.repo_group_id + "/top-committers?threshold=1", function(committerData, status){

                    repogr.committers = committerData;
                    repogr.committers.pop();

                    repogr.totalCommits = 0;

                    $("#sectionList").append('<li><a href="#'+ repogr.repo_group_id + '">'+ repogr.rg_name + '</a></li>');

                    $("#sectionBody").append('<div id="'+ repogr.repo_group_id +'"></div>');
                    $("#" + repogr.repo_group_id).append('<h1>' + repogr.rg_name + '</h1>');
                    $("#" + repogr.repo_group_id).append('<canvas id="'+ repogr.repo_group_id +'-canvas"></canvas>');

                    createGraph(repogr);

                });
           // });
        }
    });   
}

function createGraph(data) {
    var id = data.repo_group_id;
    var committers = data.committers;
    var otherCommits = 0; //this accounts for any commit
    var totalCommits = 0;
    
    committers.forEach(e => {
        totalCommits += e.commits;
    });
    
    var numbers = [];
    var emails = [];
    var bgColors = [];
    var borderColors = [];
    
    committers.forEach(e => { //separate into two arrays
        
        if (e.commits > (totalCommits / 100) * .2) {
            numbers.push(e.commits);
            emails.push(e.email);
            
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            bgColors.push("rgba(" + r + "," + g + "," + b + ", 0.5)");
            borderColors.push("rgba(" + r + "," + g + "," + b + ", 0.7)");
        }
        else {
            otherCommits += e.commits;
        }
        
    });
    
    if(otherCommits > 0){
        numbers.push(otherCommits);
        emails.push("Other Contributers");
    }
    
    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                borderWidth: 1,
                data: numbers,
                label: data.rg_name,
                backgroundColor: bgColors,
                borderColor: borderColors
            }],
            labels: emails
        },
        options: {
            responsive: true,
				legend: {
					display: false,
				},
				title: {
					display: true,
					text: 'Contributions Per User (Total - '+ totalCommits +')'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
        }
    };
    
    var ctx = document.getElementById(id + "-canvas");
    window.myChart = new Chart(ctx, config);
    
}

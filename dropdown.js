function getRepoGroupInfo() {
    $.get("http://augur.osshealth.io:5000/api/unstable/repo-groups", function(repodata, status){
        if (status == "success") {
            var repoGroups = repodata;
            var repogr = repoGroups[4];
            //repoGroups.forEach((e) => {

                $.get("http://augur.osshealth.io:5000/api/unstable/repo-groups/" + repogr.repo_group_id + "/repos", function(committerData, status){

                      repos = committerData;
                    //e.committers.pop();

                    //e.totalCommits = 0;

                    repos.forEach((e) => {
                        $("#dropdown").append('<option>' + e.repo_name + '</option>');
                    });
                    
                    //$("#" + e.repo_group_id).append('<h1>' + e.rg_name + '</h1>');
                    //$("#" + e.repo_group_id).append('<canvas id="'+ e.repo_group_id +'-canvas"></canvas>');

                    //createGraph(repogr);

                });
            //});
        }
    }); 
}
const searchField = document.querySelector(".search-field");
const resultsPage = document.querySelector(".search-results");
const searchque = document.querySelector(".search-index");


//Grab the outputed Json data from connected PHP file
fetch("./server-side/data-connect.php")
.then(response => response.json())
.then((results) =>{
    let candidData = results.data.results.rows;

    //On Keystroke map through Json data
    searchField.addEventListener("keyup", ()=>{

        let regExp = new RegExp(searchField.value, "i");
        let resultsH2 = []; 
        let searchIndex = [];
        let keyFilter;
        let itemData;
        let searchArray;

        keyFilter = candidData.map((item,index)=>{
            //Check if the property name data matches the user input
            //Push all matching results into an Array to be filtered
            if(item.name.search(regExp) != -1){
                itemData = `<div class="result-data" data-index="${index}"><h2>${item.name}</h2></div>`; 
                resultsH2.push(itemData);  
                searchIndex.push(index);
            }

        });

        //grab the First 5 names to be displayed on page when user types in search bar
        searchArray = [resultsH2[0],resultsH2[1],resultsH2[2],resultsH2[3],resultsH2[4]];
        
        //grab the index of the first 5 in our index array
        searchIndexArray = [searchIndex[0],searchIndex[1],searchIndex[2],searchIndex[3],searchIndex[4]];

        //output Search data onto the search page 
        resultsPage.innerHTML = searchArray.join("");
        
        //Push the search results index into hidden input to be passed as a URL param value
        searchque.value = searchIndexArray;
        
    });
    

    
});




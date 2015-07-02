var searchTextArr=new Array();
searchTextArr[0]='video name';
searchTextArr[1]='video name';
searchTextArr[2]='video name';
searchTextArr[3]='video name';
searchTextArr[4]='video name';
searchTextArr[5]='video name';
searchTextArr[6]='video name';
searchTextArr[7]='video name';
searchTextArr[8]='video name';
searchTextArr[9]='video name';

var searchTextTimer = null;

function setSearchInputContent(obj){
        var searchTextTime = 0;
        if(obj&&!searchTextTimer){
                obj.value = searchTextArr[0];
                searchTextTimer = setInterval(function(){
                        obj.value = searchTextArr[searchTextTime%searchTextArr.length];
                        setTimeout(function(){obj.blur()},500);
                        //obj.blur();
                        searchTextTime++;
                },10000)
        }
}

function stopSearchTextTimer(){
        clearInterval(searchTextTimer);
        searchTextTimer = null;
}
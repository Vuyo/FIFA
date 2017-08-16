/*
 * To change Form license header, choose License Headers in Project Properties.
 * To change Form template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 *  Data is static, it simply loads and returns JSON data from a url
 */

var Data = function () {};

Data.loadJSON = function (url,scope, method,params) {

    var xmlHttp = new XMLHttpRequest();

    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            data.unshift(method);
            scope[method](data);
        }
    };

    xmlHttp.open("GET", url+"?op="+method+(params ? "&" + params : ""), true);
    xmlHttp.send();

};


Data.getUrlVariables = function(callback){
    var vars = getUrlVariablesObject();
    callback(vars);
};

// Posts a form 
Data.sendForm = function (formData,url,callback) {
    trace(formData);
    var xmlHttp = new XMLHttpRequest();
    
    xmlHttp.open("POST", url, true);

    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState === 4) {
            if (xmlHttp.status === 200) {
                callback(xmlHttp.responseText);
            } else {
                callback(xmlHttp.responseText);
            }
            
        }
    };

    xmlHttp.send(formData);

};
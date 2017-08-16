/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Utils

var Utils = function(){};

Utils.wireElementsTo = function(obj){
        // Dynamically get all document elements with id's and then store the element
    var elements = document.getElementsByTagName("*");

    for (var i = 0, n = elements.length; i < n; ++i) {
        var element = elements[i];
        if (element.id) {
            obj[element.id] = element;
        }
    }

};

Utils.loadPixel = function(url) {

  var image = document.createElement('img');
  document.body.appendChild(image);

  image.src = url;
  image.style.borderStyle = 'none';
  image.height = 1;
  image.width = 1;
  image.alt = '';
};


function getElement(id) {
    var element = document.getElementById(id);
    return element;
}

function getUrlVariable(name) {
    if (name === undefined) {
        return "";
    }
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function getUrlVariablesObject() {
var pairs = location.search.slice(1).split('&');

    var result = {};
    pairs.forEach(function(pair) {
        pair = pair.split('=');
        result[pair[0]] = decodeURIComponent(pair[1].replace(/\+/g, " "));
    });

    return result;
}

function navigateTo(url){
    window.location = url;
}

function trace(message) {
    console.log(message);
}

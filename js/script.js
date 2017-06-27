var musicType = $('#data').data('musictype');
var entrance = $('#data').data('entrance');
var theValue = $('#data').data('rangevalue');

function init() {

  rangeSlider();

  console.log(musicType);
  console.log(entrance);
  console.log(theValue);

  var newRadius = theValue;
  console.log("the radius = " + newRadius);

  initMaps(newRadius);
}

init();

// FUNC: Init map and set props
function initMaps(newRadius) {
  var accessToken = 'pk.eyJ1IjoicHJvdGVpbnNsdXJwIiwiYSI6ImNqM2xpZ2htOTAwNzAzM2p2MG10NmFkanoifQ.Iml9qkvEU2f8ndyJJ5DnkA'; // Add token for working version
  var currentLocation = [51.9173142, 4.4849073];

  var map = L.map('map-container', {
    center: currentLocation,
    zoom: 15,
    dragging: false,
    zoomControl: false,
    scrollWheelZoom: false
  });

  // var radius = 600;
  var radius = newRadius;
  var companyLocations = [];

  L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=' + accessToken, {
    minZoom: 14,
    maxZoom: 16
  }).addTo(map);

  var radiusCircle = L.circle(L.latLng(currentLocation), radius, {
    className: 'radius-circle',
    color: '#2FC3B6',
    fillColor: '#85DAD2',
    fillOpacity: 0.5,
    weight: 2
  }).addTo(map);

  var studentMarker = L.icon({
    className: 'student-marker',
    iconUrl: 'img/marker.png',
    iconSize: [25],
    iconAnchor: [29, 34]
  });
  
  var companyMarker = L.icon({
    className: 'company-marker',
    iconUrl: 'img/drink-marker.ico',
    iconSize: [25],
    iconAnchor: [15, 40],
  });

  L.marker(currentLocation, {icon: studentMarker}).addTo(map);
  
  // Alles
  if (musicType == "alles") {
    if (entrance == "alles") {
      companyLocations.push([51.919752,4.4894064]);
      companyLocations.push([51.9166492,4.4854844]);
      companyLocations.push([51.9174526,4.4855729]);
      companyLocations.push([51.9167311,4.4817098]);
    }
    if (entrance == "gratis") {
      companyLocations.push([51.9166492,4.4854844]);
      companyLocations.push([51.919752,4.4894064]);
    }
    if (entrance == "minderdan5") {
      companyLocations.push([51.9167311,4.4817098]);
      companyLocations.push([51.9166492,4.4854844]);
      companyLocations.push([51.919752,4.4894064]);
    }
    if (entrance == "meerdan5") {
      companyLocations.push([51.9174526,4.4855729]);
    }
  }

  // Techno
  if (musicType == "techno") {
    if (entrance == "alles") {
      companyLocations.push([51.9167311,4.4817098]);
    }
    if (entrance == "gratis") {
    }
    if (entrance == "minderdan5") {
      companyLocations.push([51.9167311,4.4817098]);
    }
    if (entrance == "meerdan5") {
    }
  }

  // Dance
  if (musicType == "dance") {
    if (entrance == "alles") {
      companyLocations.push([51.9166492,4.4854844]);
    }
    if (entrance == "gratis") {
      companyLocations.push([51.9166492,4.4854844]);
    }
    if (entrance == "minderdan5") {
      companyLocations.push([51.9166492,4.4854844]);
    }
    if (entrance == "meerdan5") {
    }
  }

  // Rap
  if (musicType == "rap") {
    if (entrance == "alles") {
      companyLocations.push([51.9174526,4.4855729]);
    }
    if (entrance == "gratis") {
    }
    if (entrance == "minderdan5") {
    }
    if (entrance == "meerdan5") {
      companyLocations.push([51.9174526,4.4855729]);
    }
  }

  // Nederlandstalig
  if (musicType == "nederlandstalig") {
    if (entrance == "alles") {
      companyLocations.push([51.919752,4.4894064]);
    }
    if (entrance == "gratis") {
      companyLocations.push([51.919752,4.4894064]);
    }
    if (entrance == "minderdan5") {
      companyLocations.push([51.919752,4.4894064]);
    }
    if (entrance == "meerdan5") {
      
    }
  }

  $.each(companyLocations, function(key, value) {
    var companyLocation = new L.latLng(value[0], value[1]);

  if(new L.latLng(currentLocation).distanceTo(companyLocation) < radius) {
    L.marker([value[0], value[1]], {icon: companyMarker}).addTo(map);
  }
    
  });
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

function rangeSlider() {
  var range = $('.input-range'),
  value = $('.range-value');
  
  value.html(range.attr('value') + " m");

  range.on('input', function(){
      value.html(this.value + " m");
  });
}

function resetPopup() {
  $('.popup-info').addClass('hide');
  $('.close-popup').addClass('hide');
  $('.map-overlay').addClass('hide');
  $('.bottom-popup').addClass('hide');
}

function popupVibes() {
  resetPopup();

  $('.popup-vibes').removeClass('hide');
  $('.bottom-popup').removeClass('hide');
  $('.close-popup').removeClass('hide');
  $('.map-overlay').removeClass('hide');
}

function popupBeurs() {
  resetPopup();

  $('.popup-beurs').removeClass('hide');
  $('.bottom-popup').removeClass('hide');
  $('.close-popup').removeClass('hide');
  $('.map-overlay').removeClass('hide');
}

function popupBar24() {
  resetPopup();

  $('.popup-bar24').removeClass('hide');
  $('.bottom-popup').removeClass('hide');
  $('.close-popup').removeClass('hide');
  $('.map-overlay').removeClass('hide');
}

function popupSkihut() {
  resetPopup();

  $('.popup-skihut').removeClass('hide');
  $('.bottom-popup').removeClass('hide');
  $('.close-popup').removeClass('hide');
  $('.map-overlay').removeClass('hide');
}
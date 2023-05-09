const phoneNumberInput = document.querySelector("input[name='phone_number']");
if (phoneNumberInput) {
  phoneNumberInput.addEventListener("keypress", function(evt) {
    if (
      (evt.which != 8 && evt.which != 0 && evt.which < 48) ||
      evt.which > 57
    ) {
      evt.preventDefault();
    }
  });
}

const phoneCodeInput = document.querySelector("input[name='phone_code']");
if (phoneCodeInput) {
  phoneCodeInput.addEventListener("keypress", function(evt) {
    if (
      (evt.which != 8 && evt.which != 0 && evt.which < 48) ||
      evt.which > 57
    ) {
      evt.preventDefault();
    }
  });
}

const posts = document.getElementById("posts");
if (posts) {
  posts.addEventListener("click", function() {
    window.location.href = "posts";
  });
}
const inspire = document.getElementById("inspire");
if (inspire) {
  inspire.addEventListener("click", function() {
    window.location.href = "inspire";
  });
}

const inspiremob = document.getElementById("inspireMob");
if (inspiremob) {
  inspiremob.addEventListener("click", function() {
    window.location.href = "inspire";
  });
}

const posts1 = document.getElementById("posts1");
if (posts1) {
  posts1.addEventListener("click", function() {
    window.location.href = "posts";
  });
}

$(document).ready(function() {
  const book = document.getElementById("book");
  if (book) {
    book.addEventListener("click", function() {
      window.location.href = "book";
    });
  }

  const home1 = document.getElementById("home");
  if (home1) {
    home1.addEventListener("click", function() {
      window.location.href = "index";
    });
  }

  const homeMob = document.getElementById("homeMob");
  if (homeMob) {
    homeMob.addEventListener("click", function() {
      window.location.href = "index";
    });
  }

  const book1 = document.getElementById("book1");
  if (book1) {
    book1.addEventListener("click", function() {
      window.location.href = "book";
    });
  }

  const video = document.getElementById("video");
  if (video) {
    video.addEventListener("click", function() {
      window.location.href = "video";
    });
  }

  const video1 = document.getElementById("video1");
  if (video1) {
    video1.addEventListener("click", function() {
      window.location.href = "video";
    });
  }

  var elementId = window.location.pathname;
  if (elementId) {
    console.log(elementId);
    elementId = elementId.split("/inm/")[1];
    elementId = elementId.split(".")[0];
    const currentMenuItem = document.getElementById(elementId);
    currentMenuItem.style.backgroundColor = "white";
    currentMenuItem.classList.add("active");

    const currentMenuItem1 = document.getElementById(elementId + "1");
    currentMenuItem1.style.backgroundColor = "white";
    currentMenuItem1.classList.add("active");
  }
});

function homeRuth() {
  window.location.href = "index";
}

$(document).ready(function() {
  const home = document.getElementById("index");
  if (home) {
    home.addEventListener("click", function() {
      window.location.href = "index";
    });
  }

  const aboutus = document.getElementById("aboutus");
  if (aboutus) {
    aboutus.addEventListener("click", function() {
      window.location.href = "aboutus";
    });
  }

  var elementId = window.location.pathname;
  if (elementId) {
    elementId = elementId.split("/inm/")[1];
    // elementId = elementId.split("/islamapp/")[1];
    // elementId = elementId.split("/Users/balaji/Documents/QCworkspace/IslamForNonMuslims/IslamForNonMuslims/")[1];
    elementId = elementId.split(".")[0];
    console.log(elementId);
    const currentMenuItem = document.getElementById(elementId);
    currentMenuItem.classList.add("h-active");
    const currentMenuItem1 = document.getElementById(elementId + 1);
    currentMenuItem1.classList.add("h-active");
  }
});

$("#preloader").animate(
  {
    opacity: "1"
  },
  500,
  function() {
    setTimeout(function() {
      $("#preloader").css("visibility", "hidden").fadeOut();
    }, 1500);
  }
);

$(document).ready(function() {
  var code = [
    { code: "+1", flag: "🇨🇦", c_code: "CA", country: "Canada" },
    { code: "+1", flag: "🇺🇸", c_code: "US", country: "United States" },
    { code: "+1242", flag: "🇧🇸", c_code: "BS", country: "Bahamas" },
    { code: "+1246", flag: "🇧🇧", c_code: "BB", country: "Barbados" },
    { code: "+1264", flag: "🇦🇮", c_code: "AI", country: "Anguilla" },
    { code: "+1268", flag: "🇦🇬", c_code: "AG", country: "Antigua and Barbuda" },
    {
      code: "+1284",
      flag: "🇻🇬",
      c_code: "VG",
      country: "Virgin Islands, British"
    },
    {
      code: "+1340",
      flag: "🇻🇮",
      c_code: "VI",
      country: "Virgin Islands, U.S."
    },
    { code: "+1441", flag: "🇧🇲", c_code: "BM", country: "Bermuda" },
    { code: "+1473", flag: "🇬🇩", c_code: "GD", country: "Grenada" },
    {
      code: "+1649",
      flag: "🇹🇨",
      c_code: "TC",
      country: "Turks and Caicos Islands"
    },
    { code: "+1664", flag: "🇲🇸", c_code: "MS", country: "Montserrat" },
    {
      code: "+1670",
      flag: "🇲🇵",
      c_code: "MP",
      country: "Northern Mariana Islands"
    },
    { code: "+1671", flag: "🇬🇺", c_code: "GU", country: "Guam" },
    { code: "+1684", flag: "🇦🇸", c_code: "AS", country: "American Samoa" },
    { code: "+1758", flag: "🇱🇨", c_code: "LC", country: "Saint Lucia" },
    { code: "+1767", flag: "🇩🇲", c_code: "DM", country: "Dominica" },
    {
      code: "+1784",
      flag: "🇻🇨",
      c_code: "VC",
      country: "Saint Vincent and the Grenadines"
    },
    { code: "+1849", flag: "🇩🇴", c_code: "DO", country: "Dominican Republic" },
    { code: "+1868", flag: "🇹🇹", c_code: "TT", country: "Trinidad and Tobago" },
    {
      code: "+1869",
      flag: "🇰🇳",
      c_code: "KN",
      country: "Saint Kitts and Nevis"
    },
    { code: "+1876", flag: "🇯🇲", c_code: "JM", country: "Jamaica" },
    { code: "+1939", flag: "🇵🇷", c_code: "PR", country: "Puerto Rico" },
    { code: "+20", flag: "🇪🇬", c_code: "EG", country: "Egypt" },
    { code: "+211", flag: "🇸🇸", c_code: "SS", country: "South Sudan" },
    { code: "+212", flag: "🇲🇦", c_code: "MA", country: "Morocco" },
    { code: "+213", flag: "🇩🇿", c_code: "DZ", country: "Algeria" },
    { code: "+216", flag: "🇹🇳", c_code: "TN", country: "Tunisia" },
    {
      code: "+218",
      flag: "🇱🇾",
      c_code: "LY",
      country: "Libyan Arab Jamahiriya"
    },
    { code: "+220", flag: "🇬🇲", c_code: "GM", country: "Gambia" },
    { code: "+221", flag: "🇸🇳", c_code: "SN", country: "Senegal" },
    { code: "+222", flag: "🇲🇷", c_code: "MR", country: "Mauritania" },
    { code: "+223", flag: "🇲🇱", c_code: "ML", country: "Mali" },
    { code: "+224", flag: "🇬🇳", c_code: "GN", country: "Guinea" },
    { code: "+225", flag: "🇨🇮", c_code: "CI", country: "Cote d'Ivoire" },
    { code: "+226", flag: "🇧🇫", c_code: "BF", country: "Burkina Faso" },
    { code: "+227", flag: "🇳🇪", c_code: "NE", country: "Niger" },
    { code: "+228", flag: "🇹🇬", c_code: "TG", country: "Togo" },
    { code: "+229", flag: "🇧🇯", c_code: "BJ", country: "Benin" },
    { code: "+230", flag: "🇲🇺", c_code: "MU", country: "Mauritius" },
    { code: "+231", flag: "🇱🇷", c_code: "LR", country: "Liberia" },
    { code: "+232", flag: "🇸🇱", c_code: "SL", country: "Sierra Leone" },
    { code: "+233", flag: "🇬🇭", c_code: "GH", country: "Ghana" },
    { code: "+234", flag: "🇳🇬", c_code: "NG", country: "Nigeria" },
    { code: "+235", flag: "🇹🇩", c_code: "TD", country: "Chad" },
    {
      code: "+236",
      flag: "🇨🇫",
      c_code: "CF",
      country: "Central African Republic"
    },
    { code: "+237", flag: "🇨🇲", c_code: "CM", country: "Cameroon" },
    { code: "+238", flag: "🇨🇻", c_code: "CV", country: "Cape Verde" },
    {
      code: "+239",
      flag: "🇸🇹",
      c_code: "ST",
      country: "Sao Tome and Principe"
    },
    { code: "+240", flag: "🇬🇶", c_code: "GQ", country: "Equatorial Guinea" },
    { code: "+241", flag: "🇬🇦", c_code: "GA", country: "Gabon" },
    { code: "+242", flag: "🇨🇬", c_code: "CG", country: "Congo" },
    {
      code: "+243",
      flag: "🇨🇩",
      c_code: "CD",
      country: "Congo, The Democratic Republic of the Congo"
    },
    { code: "+244", flag: "🇦🇴", c_code: "AO", country: "Angola" },
    { code: "+245", flag: "🇬🇼", c_code: "GW", country: "Guinea-Bissau" },
    {
      code: "+246",
      flag: "🇮🇴",
      c_code: "IO",
      country: "British Indian Ocean Territory"
    },
    { code: "+248", flag: "🇸🇨", c_code: "SC", country: "Seychelles" },
    { code: "+249", flag: "🇸🇩", c_code: "SD", country: "Sudan" },
    { code: "+250", flag: "🇷🇼", c_code: "RW", country: "Rwanda" },
    { code: "+251", flag: "🇪🇹", c_code: "ET", country: "Ethiopia" },
    { code: "+252", flag: "🇸🇴", c_code: "SO", country: "Somalia" },
    { code: "+253", flag: "🇩🇯", c_code: "DJ", country: "Djibouti" },
    { code: "+254", flag: "🇰🇪", c_code: "KE", country: "Kenya" },
    {
      code: "+255",
      flag: "🇹🇿",
      c_code: "TZ",
      country: "Tanzania, United Republic of Tanzania"
    },
    { code: "+256", flag: "🇺🇬", c_code: "UG", country: "Uganda" },
    { code: "+257", flag: "🇧🇮", c_code: "BI", country: "Burundi" },
    { code: "+258", flag: "🇲🇿", c_code: "MZ", country: "Mozambique" },
    { code: "+260", flag: "🇿🇲", c_code: "ZM", country: "Zambia" },
    { code: "+261", flag: "🇲🇬", c_code: "MG", country: "Madagascar" },
    {
      code: "+262",
      flag: "🇹🇫",
      c_code: "TF",
      country: "French Southern Territories"
    },
    { code: "+262", flag: "🇾🇹", c_code: "YT", country: "Mayotte" },
    { code: "+262", flag: "🇷🇪", c_code: "RE", country: "Reunion" },
    { code: "+263", flag: "🇿🇼", c_code: "ZW", country: "Zimbabwe" },
    { code: "+264", flag: "🇳🇦", c_code: "NA", country: "Namibia" },
    { code: "+265", flag: "🇲🇼", c_code: "MW", country: "Malawi" },
    { code: "+266", flag: "🇱🇸", c_code: "LS", country: "Lesotho" },
    { code: "+267", flag: "🇧🇼", c_code: "BW", country: "Botswana" },
    { code: "+268", flag: "🇸🇿", c_code: "SZ", country: "Swaziland" },
    { code: "+269", flag: "🇰🇲", c_code: "KM", country: "Comoros" },
    { code: "+27", flag: "🇿🇦", c_code: "ZA", country: "South Africa" },
    {
      code: "+290",
      flag: "🇸🇭",
      c_code: "SH",
      country: "Saint Helena, Ascension and Tristan Da Cunha"
    },
    { code: "+291", flag: "🇪🇷", c_code: "ER", country: "Eritrea" },
    { code: "+297", flag: "🇦🇼", c_code: "AW", country: "Aruba" },
    { code: "+298", flag: "🇫🇴", c_code: "FO", country: "Faroe Islands" },
    { code: "+299", flag: "🇬🇱", c_code: "GL", country: "Greenland" },
    { code: "+30", flag: "🇬🇷", c_code: "GR", country: "Greece" },
    { code: "+31", flag: "🇳🇱", c_code: "NL", country: "Netherlands" },
    { code: "+32", flag: "🇧🇪", c_code: "BE", country: "Belgium" },
    { code: "+33", flag: "🇫🇷", c_code: "FR", country: "France" },
    { code: "+34", flag: "🇪🇸", c_code: "ES", country: "Spain" },
    { code: "+345", flag: "🇰🇾", c_code: "KY", country: "Cayman Islands" },
    { code: "+350", flag: "🇬🇮", c_code: "GI", country: "Gibraltar" },
    { code: "+351", flag: "🇵🇹", c_code: "PT", country: "Portugal" },
    { code: "+352", flag: "🇱🇺", c_code: "LU", country: "Luxembourg" },
    { code: "+353", flag: "🇮🇪", c_code: "IE", country: "Ireland" },
    { code: "+354", flag: "🇮🇸", c_code: "IS", country: "Iceland" },
    { code: "+355", flag: "🇦🇱", c_code: "AL", country: "Albania" },
    { code: "+356", flag: "🇲🇹", c_code: "MT", country: "Malta" },
    { code: "+357", flag: "🇨🇾", c_code: "CY", country: "Cyprus" },
    { code: "+358", flag: "🇦🇽", c_code: "AX", country: "Åland Islands" },
    { code: "+358", flag: "🇫🇮", c_code: "FI", country: "Finland" },
    { code: "+359", flag: "🇧🇬", c_code: "BG", country: "Bulgaria" },
    { code: "+36", flag: "🇭🇺", c_code: "HU", country: "Hungary" },
    { code: "+370", flag: "🇱🇹", c_code: "LT", country: "Lithuania" },
    { code: "+371", flag: "🇱🇻", c_code: "LV", country: "Latvia" },
    { code: "+372", flag: "🇪🇪", c_code: "EE", country: "Estonia" },
    { code: "+373", flag: "🇲🇩", c_code: "MD", country: "Moldova" },
    { code: "+374", flag: "🇦🇲", c_code: "AM", country: "Armenia" },
    { code: "+375", flag: "🇧🇾", c_code: "BY", country: "Belarus" },
    { code: "+376", flag: "🇦🇩", c_code: "AD", country: "Andorra" },
    { code: "+377", flag: "🇲🇨", c_code: "MC", country: "Monaco" },
    { code: "+378", flag: "🇸🇲", c_code: "SM", country: "San Marino" },
    {
      code: "+379",
      flag: "🇻🇦",
      c_code: "VA",
      country: "Holy See (Vatican City State)"
    },
    { code: "+380", flag: "🇺🇦", c_code: "UA", country: "Ukraine" },
    { code: "+381", flag: "🇷🇸", c_code: "RS", country: "Serbia" },
    { code: "+382", flag: "🇲🇪", c_code: "ME", country: "Montenegro" },
    { code: "+383", flag: "🇽🇰", c_code: "XK", country: "Kosovo" },
    { code: "+385", flag: "🇭🇷", c_code: "HR", country: "Croatia" },
    { code: "+386", flag: "🇸🇮", c_code: "SI", country: "Slovenia" },
    {
      code: "+387",
      flag: "🇧🇦",
      c_code: "BA",
      country: "Bosnia and Herzegovina"
    },
    { code: "+389", flag: "🇲🇰", c_code: "MK", country: "North Macedonia" },
    { code: "+39", flag: "🇮🇹", c_code: "IT", country: "Italy" },
    { code: "+40", flag: "🇷🇴", c_code: "RO", country: "Romania" },
    { code: "+41", flag: "🇨🇭", c_code: "CH", country: "Switzerland" },
    { code: "+420", flag: "🇨🇿", c_code: "CZ", country: "Czech Republic" },
    { code: "+421", flag: "🇸🇰", c_code: "SK", country: "Slovakia" },
    { code: "+423", flag: "🇱🇮", c_code: "LI", country: "Liechtenstein" },
    { code: "+43", flag: "🇦🇹", c_code: "AT", country: "Austria" },
    { code: "+44", flag: "🇬🇬", c_code: "GG", country: "Guernsey" },
    { code: "+44", flag: "🇮🇲", c_code: "IM", country: "Isle of Man" },
    { code: "+44", flag: "🇯🇪", c_code: "JE", country: "Jersey" },
    { code: "+44", flag: "🇬🇧", c_code: "GB", country: "United Kingdom" },
    { code: "+45", flag: "🇩🇰", c_code: "DK", country: "Denmark" },
    { code: "+46", flag: "🇸🇪", c_code: "SE", country: "Sweden" },
    { code: "+47", flag: "🇧🇻", c_code: "BV", country: "Bouvet Island" },
    { code: "+47", flag: "🇳🇴", c_code: "NO", country: "Norway" },
    {
      code: "+47",
      flag: "🇸🇯",
      c_code: "SJ",
      country: "Svalbard and Jan Mayen"
    },
    { code: "+48", flag: "🇵🇱", c_code: "PL", country: "Poland" },
    { code: "+49", flag: "🇩🇪", c_code: "DE", country: "Germany" },
    {
      code: "+500",
      flag: "🇫🇰",
      c_code: "FK",
      country: "Falkland Islands (Malvinas)"
    },
    {
      code: "+500",
      flag: "🇬🇸",
      c_code: "GS",
      country: "South Georgia and the South Sandwich Islands"
    },
    { code: "+501", flag: "🇧🇿", c_code: "BZ", country: "Belize" },
    { code: "+502", flag: "🇬🇹", c_code: "GT", country: "Guatemala" },
    { code: "+503", flag: "🇸🇻", c_code: "SV", country: "El Salvador" },
    { code: "+504", flag: "🇭🇳", c_code: "HN", country: "Honduras" },
    { code: "+505", flag: "🇳🇮", c_code: "NI", country: "Nicaragua" },
    { code: "+506", flag: "🇨🇷", c_code: "CR", country: "Costa Rica" },
    { code: "+507", flag: "🇵🇦", c_code: "PA", country: "Panama" },
    {
      code: "+508",
      flag: "🇵🇲",
      c_code: "PM",
      country: "Saint Pierre and Miquelon"
    },
    { code: "+509", flag: "🇭🇹", c_code: "HT", country: "Haiti" },
    { code: "+51", flag: "🇵🇪", c_code: "PE", country: "Peru" },
    { code: "+52", flag: "🇲🇽", c_code: "MX", country: "Mexico" },
    { code: "+53", flag: "🇨🇺", c_code: "CU", country: "Cuba" },
    { code: "+54", flag: "🇦🇷", c_code: "AR", country: "Argentina" },
    { code: "+55", flag: "🇧🇷", c_code: "BR", country: "Brazil" },
    { code: "+56", flag: "🇨🇱", c_code: "CL", country: "Chile" },
    { code: "+57", flag: "🇨🇴", c_code: "CO", country: "Colombia" },
    {
      code: "+58",
      flag: "🇻🇪",
      c_code: "VE",
      country: "Venezuela, Bolivarian Republic of Venezuela"
    },
  
    { code: "+590", flag: "🇬🇵", c_code: "GP", country: "Guadeloupe" },
    { code: "+590", flag: "🇧🇱", c_code: "BL", country: "Saint Barthelemy" },
    { code: "+590", flag: "🇲🇫", c_code: "MF", country: "Saint Martin" },
    {
      code: "+591",
      flag: "🇧🇴",
      c_code: "BO",
      country: "Bolivia, Plurinational State of Bolivia"
    },
    { code: "+592", flag: "🇬🇾", c_code: "GY", country: "Guyana" },
    { code: "+593", flag: "🇪🇨", c_code: "EC", country: "Ecuador" },
    { code: "+594", flag: "🇬🇫", c_code: "GF", country: "French Guiana" },
    { code: "+595", flag: "🇵🇾", c_code: "PY", country: "Paraguay" },
    { code: "+596", flag: "🇲🇶", c_code: "MQ", country: "Martinique" },
    { code: "+597", flag: "🇸🇷", c_code: "SR", country: "Suriname" },
    { code: "+598", flag: "🇺🇾", c_code: "UY", country: "Uruguay" },
    { code: "+599", flag: "", c_code: "AN", country: "Netherlands Antilles" },
    { code: "+60", flag: "🇲🇾", c_code: "MY", country: "Malaysia" },
    { code: "+61", flag: "🇦🇺", c_code: "AU", country: "Australia" },
    { code: "+61", flag: "🇨🇽", c_code: "CX", country: "Christmas Island" },
    {
      code: "+61",
      flag: "🇨🇨",
      c_code: "CC",
      country: "Cocos (Keeling) Islands"
    },
    { code: "+62", flag: "🇮🇩", c_code: "ID", country: "Indonesia" },
    { code: "+63", flag: "🇵🇭", c_code: "PH", country: "Philippines" },
    { code: "+64", flag: "🇳🇿", c_code: "NZ", country: "New Zealand" },
    { code: "+64", flag: "🇵🇳", c_code: "PN", country: "Pitcairn" },
    { code: "+65", flag: "🇸🇬", c_code: "SG", country: "Singapore" },
    { code: "+66", flag: "🇹🇭", c_code: "TH", country: "Thailand" },
    { code: "+670", flag: "🇹🇱", c_code: "TL", country: "Timor-Leste" },
    { code: "+672", flag: "🇦🇶", c_code: "AQ", country: "Antarctica" },
    {
      code: "+672",
      flag: "🇭🇲",
      c_code: "HM",
      country: "Heard Island and Mcdonald Islands"
    },
    { code: "+672", flag: "🇳🇫", c_code: "NF", country: "Norfolk Island" },
    { code: "+673", flag: "🇧🇳", c_code: "BN", country: "Brunei Darussalam" },
    { code: "+674", flag: "🇳🇷", c_code: "NR", country: "Nauru" },
    { code: "+675", flag: "🇵🇬", c_code: "PG", country: "Papua New Guinea" },
    { code: "+676", flag: "🇹🇴", c_code: "TO", country: "Tonga" },
    { code: "+677", flag: "🇸🇧", c_code: "SB", country: "Solomon Islands" },
    { code: "+678", flag: "🇻🇺", c_code: "VU", country: "Vanuatu" },
    { code: "+679", flag: "🇫🇯", c_code: "FJ", country: "Fiji" },
    { code: "+680", flag: "🇵🇼", c_code: "PW", country: "Palau" },
    { code: "+681", flag: "🇼🇫", c_code: "WF", country: "Wallis and Futuna" },
    { code: "+682", flag: "🇨🇰", c_code: "CK", country: "Cook Islands" },
    { code: "+683", flag: "🇳🇺", c_code: "NU", country: "Niue" },
    { code: "+685", flag: "🇼🇸", c_code: "WS", country: "Samoa" },
    { code: "+686", flag: "🇰🇮", c_code: "KI", country: "Kiribati" },
    { code: "+687", flag: "🇳🇨", c_code: "NC", country: "New Caledonia" },
    { code: "+688", flag: "🇹🇻", c_code: "TV", country: "Tuvalu" },
    { code: "+689", flag: "🇵🇫", c_code: "PF", country: "French Polynesia" },
    { code: "+690", flag: "🇹🇰", c_code: "TK", country: "Tokelau" },
    {
      code: "+691",
      flag: "🇫🇲",
      c_code: "FM",
      country: "Micronesia, Federated States of Micronesia"
    },
    { code: "+692", flag: "🇲🇭", c_code: "MH", country: "Marshall Islands" },
    { code: "+7", flag: "🇰🇿", c_code: "KZ", country: "Kazakhstan" },
    { code: "+7", flag: "🇷🇺", c_code: "RU", country: "Russia" },
    { code: "+81", flag: "🇯🇵", c_code: "JP", country: "Japan" },
    {
      code: "+82",
      flag: "🇰🇷",
      c_code: "KR",
      country: "Korea, Republic of South Korea"
    },
    { code: "+84", flag: "🇻🇳", c_code: "VN", country: "Vietnam" },
    {
      code: "+850",
      flag: "🇰🇵",
      c_code: "KP",
      country: "Korea, Democratic People's Republic of Korea"
    },
    { code: "+852", flag: "🇭🇰", c_code: "HK", country: "Hong Kong" },
    { code: "+853", flag: "🇲🇴", c_code: "MO", country: "Macao" },
    { code: "+855", flag: "🇰🇭", c_code: "KH", country: "Cambodia" },
    { code: "+856", flag: "🇱🇦", c_code: "LA", country: "Laos" },
    { code: "+86", flag: "🇨🇳", c_code: "CN", country: "China" },
    { code: "+880", flag: "🇧🇩", c_code: "BD", country: "Bangladesh" },
    { code: "+886", flag: "🇹🇼", c_code: "TW", country: "Taiwan" },
    { code: "+90", flag: "🇹🇷", c_code: "TR", country: "Turkey" },
    { code: "+91", flag: "🇮🇳", c_code: "IN", country: "India" },
    { code: "+92", flag: "🇵🇰", c_code: "PK", country: "Pakistan" },
    { code: "+93", flag: "🇦🇫", c_code: "AF", country: "Afghanistan" },
    { code: "+94", flag: "🇱🇰", c_code: "LK", country: "Sri Lanka" },
    { code: "+95", flag: "🇲🇲", c_code: "MM", country: "Myanmar" },
    { code: "+960", flag: "🇲🇻", c_code: "MV", country: "Maldives" },
    { code: "+961", flag: "🇱🇧", c_code: "LB", country: "Lebanon" },
    { code: "+962", flag: "🇯🇴", c_code: "JO", country: "Jordan" },
    { code: "+963", flag: "🇸🇾", c_code: "SY", country: "Syrian Arab Republic" },
    { code: "+964", flag: "🇮🇶", c_code: "IQ", country: "Iraq" },
    { code: "+965", flag: "🇰🇼", c_code: "KW", country: "Kuwait" },
    { code: "+966", flag: "🇸🇦", c_code: "SA", country: "Saudi Arabia" },
    { code: "+967", flag: "🇾🇪", c_code: "YE", country: "Yemen" },
    { code: "+968", flag: "🇴🇲", c_code: "OM", country: "Oman" },
    {
      code: "+970",
      flag: "🇵🇸",
      c_code: "PS",
      country: "Palestinian Territory, Occupied"
    },
    { code: "+971", flag: "🇦🇪", c_code: "AE", country: "United Arab Emirates" },
    { code: "+972", flag: "🇮🇱", c_code: "IL", country: "Israel" },
    { code: "+973", flag: "🇧🇭", c_code: "BH", country: "Bahrain" },
    { code: "+974", flag: "🇶🇦", c_code: "QA", country: "Qatar" },
    { code: "+975", flag: "🇧🇹", c_code: "BT", country: "Bhutan" },
    { code: "+976", flag: "🇲🇳", c_code: "MN", country: "Mongolia" },
    { code: "+977", flag: "🇳🇵", c_code: "NP", country: "Nepal" },
    {
      code: "+98",
      flag: "🇮🇷",
      c_code: "IR",
      country: "Iran, Islamic Republic of Persian Gulf"
    },
    { code: "+992", flag: "🇹🇯", c_code: "TJ", country: "Tajikistan" },
    { code: "+993", flag: "🇹🇲", c_code: "TM", country: "Turkmenistan" },
    { code: "+994", flag: "🇦🇿", c_code: "AZ", country: "Azerbaijan" },
    { code: "+995", flag: "🇬🇪", c_code: "GE", country: "Georgia" },
    { code: "+996", flag: "🇰🇬", c_code: "KG", country: "Kyrgyzstan" },
    { code: "+998", flag: "🇺🇿", c_code: "UZ", country: "Uzbekistan" }
  ];
  code = code.sort((a, b) => {
    let fa = a.country.toLowerCase(),
      fb = b.country.toLowerCase();
    if (fa < fb) {
      return -1;
    }
    if (fa > fb) {
      return 1;
    }
    return 0;
  });

  const country_code = document.getElementById("country_code");
  if (country_code != null) {
    for (let i = 0; i < code.length; i++) {
      country_code.innerHTML += `<option value=${code[i]
        .code} style="background:white; margin:0px; padding:10px"> <a style="background-color:white; margin:10px; padding:10px"> ${code[
        i
      ].flag} ${code[i].country}(${code[i].code}) </a></option>`;
    }
  }
});

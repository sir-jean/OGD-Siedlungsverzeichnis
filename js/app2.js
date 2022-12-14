var muniArr = [
    //Bezirk Arbon, 11 Gemeinden
    [4436, "Romanshorn", 11100],
    [4451, "Uttwil", 1824],
    [4426, "Kesswil", 973],
    [4441, "Salmsach", 1425],
    [4411, "Egnach", 4655],
    [4401, "Arbon", 14523],
    [4421, "Horn", 2731],
    [4431, "Roggwil", 3021],
    [4461, "Amriswil", 13422],
    [4406, "Dozwil", 685],
    [4416, "Hefenhofen", 1179],
    [4446, "Sommeri", 565],

    //Bezirk Kreuzlingen, 13 Gemeinden
    [4656, "Güttingen", 1541],
    [4641, "Altnau", 2141],
    [4691, "Münsterlingen", 3459],
    [4643, "Bottighofen", 2211],
    [4671, "Kreuzlingen", 21979],
    [4681, "Langrickenbach", 1268],
    [4683, "Lengwil", 1714],
    [4666, "Kemmental", 2492],
    [4696, "Tägerwilen", 4617],
    [4651, "Gottlieben", 337],
    [4646, "Ermatingen", 3433],
    [4851, "Salenstein", 1305],
    [4846, "Raperswilen", 386],
    [4701, "Wäldi", 1019],

    //Bezirk Weinfelden, 17 Gemeinden
    [4486, "Hauptwilen-Gottshaus", 1889],
    [4511, "Zihlschlacht-Sitterdorf", 2337],
    [4471, "Bischofszell", 5941],
    [4495, "Hohen-Tannen", 546],
    [4476, "Erlen", 3718],
    [4501, "Kradolf-Schönenberg", 3557],
    [4506, "Sulgen", 3820],
    [4911, "Bürglen", 3804],
    [4901, "Birwinken", 1309],
    [4891, "Berg", 3388],
    [4791, "Wuppenau", 1061],
    [4756, "Schönholzerswilen", 835],
    [4921, "Bussnang", 2242],
    [4946, "Weinfelden", 11415],
    [4941, "Märstetten", 2844],
    [4711, "Affeltrangen", 2516],
    [4881, "Amlikon-Bissegg", 1331],
    [4951, "Wigoltingen", 2406],

    //Bezirk Frauenfeld, 22 Gemeinden
    [4606, "Stettfurt", 1181],
    [4591, "Matzingen", 2860],
    [4611, "Thundorf", 1396],
    [4566, "Frauenfeld", 25421],
    [4571, "Gachnang", 4330],
    [4590, "Hüttlingen", 811],
    [4561, "Felben-Wellhausen", 2817],
    [4831, "Müllheim", 2946],
    [4841, "Pfyn", 1978],
    [4621, "Warth-Weiningen", 1330],
    [4616, "Uessingen-Buch", 1014],
    [4601, "Neunforn", 998],
    [4816, "Homburg", 1446],
    [4811, "Herdern", 1034],
    [4821, "Hüttwilen", 1674],
    [4801, "Berlingen", 882],
    [4864, "Steckborn", 3711],
    [4826, "Mammern", 616],
    [4806, "Eschenz", 1689],
    [4871, "Wagenhausen", 1633],
    [4545, "Diessenhofen", 3957],
    [4536, "Basadingen-Schlattingen", 1792],
    [4546, "Schlatt (TG)", 1677],

    //Bezirk Münchwilen (TG), 12 Gemeinden
    [4726, "Fischingen", 1927],
    [4751, "Rickenbach (TG)", 2765],
    [4786, "Wilen (TG)", 2494],
    [4761, "Sirnach", 7666],
    [4724, "Eschlikon", 4327],
    [4721, "Bichelsee-Balterswil (Bi.)", 2819],
    [4746, "Münchwilen (TG)", 5586],
    [4781, "Wängi", 1019],
    [4551, "Aadorf", 8982],
    [4723, "Braunau", 726],
    [4776, "Tobel-Tägerschen", 5589],
    [4716, "Bettwiesen", 1227],
    [4741, "Lommis", 1171]
];

var color = [
    [1, "#f9d9cc", "#cffae3"],
    [2, "#f6c7b2", "#b7f8d6"],
    [3, "#f3b499", "#9ff6c8"],
    [4, "#f1a27f", "#87f4bb"],
    [5, "#ee8f66", "#6ff2ad"],
    [6, "#eb7c4c", "#57f09f"],
    [7, "#e86a32", "#3fee92"],
    [8, "#e55719", "#27ec84"],
    [9, "#e34500", "#10ea77"],
    [10, "#cc3e00", "#0ed26b"],
    [11, "#b53700", "#0cbb5f"]
];

var btnP = null;

var max = 0;
for (i = 0; i < muniArr.length; i++) {
    if (max < muniArr[i][2]) {
        max = muniArr[i][2];
    }
}

init();

$("button").click(function () {
    switch (this.id) {
        case "btn1":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn2":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn3":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn4":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn5":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        default:
            $('#graph').empty();
            btnP = null;
            init();
            break;
    }
});

    function init() {
      
      var myMap = new ymaps.Map("star_map", {
        center: [45.01255152, 39.04633609],
        zoom: 14
      });

      var starokubanskiy = new ymaps.Placemark([45.00460362, 39.03487742], {
        balloonContent: 'ЖК Старокубанский',
      },
      {
            iconLayout: 'default#image',
            iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/starokuban.png',
            iconImageSize: [ 65, 60 ]
        }
      );

      var sunIsland = new ymaps.Placemark([45.00892206, 39.05482983], {
        content: 'Парк Солнечный остров',
        balloonContent: 'Парк Солнечный остров'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/park.png',
        iconImageSize: [44,42]
      }
      );

      var okyeMarket = new ymaps.Placemark([45.01049877, 39.06780653], {
        content: 'Гипермаркет OKEY',
        balloonContent: 'Гипермаркет OKEY'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/ok.png',
        iconImageSize: [44,42]
      });

      var mediaPlaza = new ymaps.Placemark([45.02378197, 39.04615650], {
        content: 'ТЦ Медиа Плаза',
        balloonContent: 'ТЦ Медиа Плаза'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/media-plaza.png',
        iconImageSize: [44,42]
      }
      );

      var meredian = new ymaps.Placemark([45.02585153, 39.04602776], {
        content: 'ТРЦ Мередиан',
        balloonContent: 'ТРЦ Мередиан'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/media-plaza.png',
        iconImageSize: [44,42]
      }
      );

      var galaxy = new ymaps.Placemark([45.02962524, 39.04628525], {
        content: 'ТРЦ Галактика',
        balloonContent: 'ТРЦ Галактика'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/media-plaza.png',
        iconImageSize: [44,42]
      }
      );

      var okyeMarket2 = new ymaps.Placemark([45.03105554, 39.04671440], {
        content: 'Гипермаркет OKEY',
        balloonContent: 'Гипермаркет OKEY'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/ok.png',
        iconImageSize: [44,42]
      });

      var ashan = new ymaps.Placemark([45.03397687, 39.05001889], {
        content: 'Гипермаркет Ашан',
        balloonContent: 'Гипермаркет Ашан'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/media-plaza.png',
        iconImageSize: [44,42]
      }
      );

      var SBS = new ymaps.Placemark([45.03418988, 39.05306588], {
        content: 'СБС Мегамолл',
        balloonContent: 'СБС Мегамолл'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/media-plaza.png',
        iconImageSize: [44,42]
      }
      );

      var magnitMarket = new ymaps.Placemark([45.00864907, 39.03320721], {
        content: 'Супермаркет Магнит',
        balloonContent: 'Супермаркет Магнит'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/magnit.png',
        iconImageSize: [44,42]
      });

      var magnitMarket2 = new ymaps.Placemark([45.01229803, 39.03855914], {
        content: 'Супермаркет Магнит',
        balloonContent: 'Супермаркет Магнит'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/magnit.png',
        iconImageSize: [44,42]
      });

      var schooll22 = new ymaps.Placemark([45.00924271, 39.03141549], {
        content: 'Школа №22',
        balloonContent: 'Школа №22'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/shkola.png',
        iconImageSize: [44,42]
      });

      var playschool112 = new ymaps.Placemark([45.00899752, 39.03729824], {
        content: 'Детский сад №112',
        balloonContent: 'Детский сад №112'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/det_sad.png',
        iconImageSize: [44,42]
      });

      var schooll6 = new ymaps.Placemark([45.01148138, 39.04005812], {
        content: 'Школа №6',
        balloonContent: 'Школа №6'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/shkola.png',
        iconImageSize: [44,42]
      });

      var bolgaria = new ymaps.Placemark([45.01597138, 39.03669999], {
        content: 'Кинотеатр Болгария',
        balloonContent: 'Кинотеатр Болгария'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/bolgariya.png',
        iconImageSize: [44,42]
      });

      var playschool31 = new ymaps.Placemark([45.01208078, 39.04159738], {
        content: 'Детский сад №31',
        balloonContent: 'Детский сад №31'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/det_sad.png',
        iconImageSize: [44,42]
      });

      var playschool124 = new ymaps.Placemark([45.01256784, 39.04133989], {
        content: 'Детский сад №124',
        balloonContent: 'Детский сад №124Кин'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/det_sad.png',
        iconImageSize: [44,42]
      });

      var playschool121 = new ymaps.Placemark([45.01378625, 39.04167573], {
        content: 'Детский сад №121',
        balloonContent: 'Детский сад №121'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/det_sad.png',
        iconImageSize: [44,42]
      });

      var church = new ymaps.Placemark([45.00695908, 39.03981516], {
        content: 'церковь Дмитрия Донского',
        balloonContent: 'церковь Дмитрия Донского'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/cerkov.png',
        iconImageSize: [44,42]
      });

      var kubGTu = new ymaps.Placemark([45.01306691, 39.04551376], {
        content: 'КубГТу',
        balloonContent: 'КубГТу'
      },{
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/kubgtu.png',
        iconImageSize: [44,42]
      });
      var playschool116 = new ymaps.Placemark([45.01494341, 39.03519553], {
        content: 'Детский сад №116',
        balloonContent: 'Детский сад №116'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/det_sad.png',
        iconImageSize: [44,42]
      });

      var kubGu = new ymaps.Placemark([45.01957639, 39.03114417], {
        content: 'КубГу',
        balloonContent: 'КубГу'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/kubgu.png',
        iconImageSize: [44,42]
      });

      var tram = new ymaps.Placemark([45.01519302, 39.04696263], {
        content: 'Трамваи',
        balloonContent: 'Трамваи: № 4, 5, 9, 10'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/tramvay.png',
        iconImageSize: [44,42]
      });

      var tram2 = new ymaps.Placemark([45.01279325, 39.03780672], {
        content: 'Трамваи',
        balloonContent: 'Трамваи: № 12, 22, 6, 7'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/tramvay.png',
        iconImageSize: [44,42]
      });

      var trolleybus = new ymaps.Placemark([45.01629387, 39.04764506], {
        content: 'Троллейбусы',
        balloonContent: 'Троллейбусы: № 7, 13, 16, 20'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/trmvay.png',
        iconImageSize: [44,42]
      });

      var minibus = new ymaps.Placemark([45.01477137, 39.04763213], {
        content: 'Маршрутные такси',
        balloonContent: 'Маршрутные такси: № 12,13,15,27,28, 30, 34, 35, 37, 39, 48, 53, 65, 77, 93, 177'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/marshrutka.png',
        iconImageSize: [44,42]
      });

      var policlinic = new ymaps.Placemark([45.02546258, 39.03480519], {
        content: 'Поликлиника',
        balloonContent: 'Поликлиника №15'
      });

      var kuban = new ymaps.Placemark([45.00613022, 39.04248761], {
        content: 'река Кубань',
        balloonContent: 'река Кубань'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'http://gik23.ru/main/wp-content/themes/maininvest/_subprojects/starokubanskiy/img/map_icons/reka.png',
        iconImageSize: [44,42]
      });

    myMap.geoObjects.add(starokubanskiy);
    myMap.geoObjects.add(sunIsland);
    myMap.geoObjects.add(okyeMarket);
    myMap.geoObjects.add(mediaPlaza);
    myMap.geoObjects.add(meredian);
    myMap.geoObjects.add(galaxy);
    myMap.geoObjects.add(okyeMarket2);
    myMap.geoObjects.add(ashan);
    myMap.geoObjects.add(SBS);
    myMap.geoObjects.add(magnitMarket);
    myMap.geoObjects.add(playschool112);
    myMap.geoObjects.add(schooll6);
    myMap.geoObjects.add(bolgaria);
    myMap.geoObjects.add(playschool31);
    myMap.geoObjects.add(playschool124);
    myMap.geoObjects.add(playschool121);
    myMap.geoObjects.add(church);
    myMap.geoObjects.add(kubGTu);
    myMap.geoObjects.add(schooll22);
    myMap.geoObjects.add(playschool116);
    myMap.geoObjects.add(kubGu);
    myMap.geoObjects.add(tram);
    myMap.geoObjects.add(trolleybus);
    myMap.geoObjects.add(tram2);
    myMap.geoObjects.add(minibus);
    myMap.geoObjects.add(magnitMarket2);
    myMap.geoObjects.add(policlinic);
    myMap.geoObjects.add(kuban);
  }
<?php

namespace Database\Seeders;

use App\Models\Lugares;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LugaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Alaska';
        $nuevolugar->Descripcion = "Un crucero por Alaska es la manera más conveniente de conocer las principales bellezas de este vasto y todavía salvaje territorio de más de 1,7 millones de km2, en el que entrarían 178 de las 194 naciones del mundo. En sus amplios y casi vírgenes espacios solo viven 720 mil personas, lo que ha permitido conservar bellezas como sus reservas naturales, glaciares, lagos y ríos, con su increíble fauna y flora.";
        $nuevolugar->Ubicacion = " Esta ubicado en el extremo noroeste de América del Norte, limitando al norte con el océano Ártico, al sur con el océano Pacífico, al este con Canadá y al oeste con el mar de Bering,";
        $nuevolugar->Imagen = "images/fulls/01.jpg";
        $nuevolugar->Imagen2 = 'images/thumbs/01.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Tahití, Francia';
        $nuevolugar->Descripcion ="Este territorio insular francés en Polinesia es famoso por sus hermosas playas ideales para bucear, nadar y practicar otros deportes de mar. En su capital, Papeete, hallarás interesantes atracciones arquitectónicas como el Palacio Presidencial, la Casa del Alto Comisionado, la Catedral de Notre Dame y el Museo Gauguin, referido a la vida y obras del célebre pintor francés, Paul Gauguin. El Museo de la Perla Negra, único en el mundo que exhibe rarezas en estas gemas, incluyendo una de las más grandes del mundo, también está en Papeete.";
        $nuevolugar->Ubicacion = "Tahití es la isla más grande de la Polinesia francesa, situada en el archipiélago de las islas de la Sociedad al sur de Oceanía";
        $nuevolugar->Imagen = "images/fulls/02.jpg";
        $nuevolugar->Imagen2 = 'images/thumbs/02.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Cancún, México';
        $nuevolugar->Descripcion ='El destino turístico mexicano más famoso en todo en el mundo. Cancún debe su popularidad por la belleza de sus playas, divertidos parques de aventuras, los cercanos yacimientos arqueológicos mayas y a su capacidad hotelera.<br> Ni siquiera es necesario salir de la zona hotelera de Cancún para disfrutar de las mejores playas del Caribe. <br> Desde la Torre escénica tendrás las más espectaculares vistas de la ciudad y en sus alrededores podrás bucear en los mejores arrecifes del mar. Solo tendrás que abordar un barco en la zona hotelera o Puerto Juárez para ir a Cozumel o Isla Mujeres.';
        $nuevolugar->Ubicacion ='Cancún está ubicado en la esquina noreste de la Península de Yucatán en México. Esta ciudad está situada en la costa del Mar Caribe a 11 metros por encima del nivel del mar';
        $nuevolugar->Imagen ='images/fulls/03.jpg'; 
        $nuevolugar->Imagen2 ='images/thumbs/03.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Orlando, EE.UU';
        $nuevolugar->Descripcion = 'La ciudad de Orlando es fantástica para disfrutar de vacaciones tanto para niños y adultos. Sus parques de atracciones como Magic Kingdom, Disney-MGM Studios y Universal Studios, están entre los mejores del mundo, lo que le hace ser un destino anhelado para millones de turistas. <br>Pese a que es su principal atractivo, Orlando no es solo parques. El desarrollo de la ciudad es admirable con autopistas bien cuidadas, amplia oferta hotelera, gastronómica y lugares para el entretenimiento adulto del primer mundo.';
        $nuevolugar->Ubicacion = 'La ciudad de Orlando es la sede del condado de Orange y es ciudad central de la zona metropolitana del mismo nombre, así como también cabecera de la región conocida como Florida Central, en el estado de Florida, del sudeste de Estados Unidos.';
        $nuevolugar->Imagen = 'images/fulls/04.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/04.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Punta Cana, República Dominicana';
        $nuevolugar->Descripcion = 'Punta Cana es tan popular que su aeropuerto internacional mueve a más pasajeros que la terminal aérea de Santo Domingo. <br> Este enclave turístico en el extremo este de la isla La Española tiene playas paradisíacas de aguas cristalinas y blanca arena, como Bávaro, Arena Gorda, Cabo Engaño, Cabeza de Toro y Punta Cana, todas con excelentes hoteles y resorts frente al mar.';
        $nuevolugar->Ubicacion = 'Punta Cana, el extremo más oriental de República Dominicana, limita con el mar Caribe y con el océano Atlántico. Es una región conocida por sus 32 km de extensión de playas y aguas claras';
        $nuevolugar->Imagen = 'images/fulls/05.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/05.jpg';

        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Roma, Italia';
        $nuevolugar->Descripcion = 'Roma recibe anualmente a más de 7 millones de turistas extranjeros que quieren conocer los monumentos del que fuera el Imperio Romano. <br> El Coliseo, el Panteón y el Foro Romano, son los símbolos de la magnificencia de esa época en la que la ciudad era la “capital del mundo” <br> La Ciudad del Vaticano y sus museos reúne una de las colecciones universales de arte más importantes, albergando joyas como el mural, El Juicio Final, de Miguel Ángel..';
        $nuevolugar->Ubicacion = 'Roma es una ciudad italiana de 2 815 951 habitantes,​ capital de la región del Lacio y de Italia.';
        $nuevolugar->Imagen = 'images/fulls/06.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/06.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Las Vegas, EE.UU';
        $nuevolugar->Descripcion = 'La “ciudad del pecado” es uno de los principales destinos turísticos de Estados Unidos y del mundo. Las Vegas reúne en una misma ciudad los casinos más prestigiosos, los hoteles más elegantes, los bares y restaurantes más populares y es el lugar donde se celebran las peleas de boxeo más importantes del deporte. <br> La ciudad construida por la mafia en el siglo XX recibe anualmente a más de 40 millones de visitantes de EEUU y del mundo. <br> Para apostar, alojarse y divertirse en grande, tienes el Flamingo, el Caesars Palace y MGM Grand Las Vegas. El Museo de la Mafia y el Gran Cañón de Colorado están a 2 horas en coche desde la “ciudad del pecado”';
        $nuevolugar->Ubicacion = 'Las Vegas es la ciudad más grande del estado de Nevada, en Estados Unidos. Es uno de los principales destinos turísticos del país';
        $nuevolugar->Imagen = 'images/fulls/07.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/07.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Londres, Reino Unido';
        $nuevolugar->Descripcion = 'Aunque atracciones recientes como el Coca Cola London Eye atrae a muchos turistas, la arquitectura y los museos de Londres siguen siendo los principales encantos de la capital de Inglaterra.<br> La Casa del Parlamento con el icónico Big Ben, la Torre de Londres, el Puente de la Torre, el Palacio de Buckingham, la Abadía de Westminster y la Catedral de San Pablo, acaparan el interés de los amantes de la historia y de la arquitectura.<br>La ciudad tiene algunos de los museos más completos del mundo como el de Historia Natural, el Museo Británico, el de Ciencias, la Galería Nacional, el Museo de Victoria y Alberto y el Madame Tussauds, el museo de cera más famoso de todos.';
        $nuevolugar->Ubicacion = 'Se ubica en Inglaterra y Noroeste de Europa: Londres, Bélgica y Países Bajos.';
        $nuevolugar->Imagen = 'images/fulls/08.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/08.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Ámsterdam, Países Bajos';
        $nuevolugar->Descripcion = 'Ámsterdam te espera con sus famosos canales de la “Venecia del Norte” construidos en el siglo XVII, recorrido que desde hace 400 años ofrece las mejores postales de la ciudad. <br>Aunque el Barrio Rojo también conocido como Red Light es la zona más popular de entretenimiento para adultos de la ciudad, Ámsterdam también tiene su lado más amable, como la Plaza Dam, el Palacio Real, la Iglesia Nueva y la Estación Central.';
        $nuevolugar->Ubicacion = 'Son un país soberano ubicado al noreste de la Europa continental y el país constituyente más grande de los cuatro que, junto con las islas de Aruba, Curazao y San Martín';
        $nuevolugar->Imagen = 'images/fulls/09.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/09.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Maui, Hawái, EE.UU';
        $nuevolugar->Descripcion = 'Maui es la segunda isla más grande de Hawái pero la más popular entre los turistas, por sus 50 km de playas paradisíacas, frondosas junglas y sus magníficos campos de golf. Toda una belleza. <br> La isla está formada por dos volcanes unidos por un istmo y sus principales playas son Arena Roja (Kaihalulu), Hookipa, Playa Grande y Playa Pequeña (Oneloa y Pu’u Olai) y Roca Negra (Kaanapali).';
        $nuevolugar->Ubicacion = 'Está ubicado en el océano Pacífico central, al suroeste de los Estados Unidos continentales, y comprende casi todo el archipiélago de Hawá';
        $nuevolugar->Imagen = 'images/fulls/10.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/10.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Playa del Carmen, México';
        $nuevolugar->Descripcion = 'Playa del Carmen está rodeada de cenotes, raros y placenteros cuerpos de agua que eran sagrados para los mayas y que existen en pocos países, siendo México uno de los privilegiados. <br> La ciudad tiene una estupenda infraestructura hotelera y de servicios turísticos, que se suma a sus reservas naturales como Jungle Place y Sian Ka’an, donde podrás admirar la rica fauna y flora de la Península de Yucatán.';
        $nuevolugar->Ubicacion = 'Está situado en el norte del estado mexicano Quintana Roo, por la Costa Caribe “Riviera Maya”.';
        $nuevolugar->Imagen = 'images/fulls/11.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/11.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'París, Francia';
        $nuevolugar->Descripcion = 'París está entre las primeras 10 ciudades más turísticas del mundo. Solo la Torre Eiffel atrae a más de 7 millones de personas todos los años. <br>Es difícil decidir que es más importante en la capital francesa; si sus lugares de interés histórico y artístico o su arte gastronómico y restaurantes. Entre los primeros se distinguen el Louvre, museo que guarda la Gioconda, la Venus de Milo y otros tesoros del arte universal.';
        $nuevolugar->Ubicacion = 'París está situado en el norte de Francia, en el centro de la cuenca parisina. La ciudad es atravesada por el río Sena.';
        $nuevolugar->Imagen = 'images/fulls/12.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/12.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Nueva York, EE.UU';
        $nuevolugar->Descripcion = 'La “capital de mundo”, “la gran manzana”, la “ciudad que nunca duerme”, así es conocida Nueva York, la metrópolis más turística de Estados Unidos y uno de los lugares para vacacionar en el mundo, más fascinantes. <br> New York es visitada por más 60 millones de turistas al año, hombres y mujeres que quieren conocer sus parques, edificios, teatros, avenidas y todos los atractivos turísticos de la ciudad.';
        $nuevolugar->Ubicacion = 'Se encuentra al Norte de Estados Unidos';
        $nuevolugar->Imagen = 'images/fulls/13.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/13.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Islandia';
        $nuevolugar->Descripcion = 'No hay un mejor lugar en Europa para admirar las auroras polares, el sol de medianoche y las noches blancas, que Islandia. <br> La zona geológica de Thingvellir y Skaftafell, los glaciares con sus curiosas formaciones de hielo, el Lago Myvatn, las cascadas Godafoss y Gullfoss y los balnearios geotérmicos, especialmente la Laguna Azul (Blue Lagoon), son paisajes de una alucinante belleza.';
        $nuevolugar->Ubicacion = 'Islandia está situada en el océano Atlántico al sur del círculo polar ártico, que pasa a través de la pequeña isla de Grímsey.';
        $nuevolugar->Imagen = 'images/fulls/14.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/14.jpg';
        $nuevolugar->save();

        $nuevolugar = new Lugares();
        $nuevolugar->Lugar = 'Nueva Zelanda';
        $nuevolugar->Descripcion = 'Este archipiélago oceánico ha crecido como destino turístico por sus volcanes,  edénicas playas y ciudades con alto estándar de vida. Auckland es su ciudad con más habitantes y con bonitas playas, costas selváticas y bahías encantadoras. <br> Wellington, su capital, destaca por su activa vida nocturna y rica cultura. En el pueblo de Whakatane podrás visitar el Whakaari, un volcán marino en actividad.';
        $nuevolugar->Ubicacion = 'Nueva Zelanda es un país en el suroeste del océano Pacífico,';
        $nuevolugar->Imagen = 'images/fulls/15.jpg';
        $nuevolugar->Imagen2 = 'images/thumbs/15.jpg';
        $nuevolugar->save();
    }
}

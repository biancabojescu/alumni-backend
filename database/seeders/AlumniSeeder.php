<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AlumniSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('alumni')->insert([
            [
                'nume' => 'Cristina Azoiței',
                'generatie' => 'Toamnă 2021',
                'anul_alumnizarii' => '2025',
                'activitati' => '- FR tehnic: Prove it 2022
- Accommodation: Summer 2022
- HR Organisers: Summer 2023
- Coordonator departament HR: Managment + Extra Resp 2023-2024
- Coordonator: Recrutări Spring 2024
- Experience: Prove it 2025
- Coordonator: Aniversare Internă 2025
- MDV: din vară 2022 până în toamnă 2024',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Paul Cușmir',
                'generatie' => 'Toamnă 2021',
                'anul_alumnizarii' => '2025',
                'activitati' => '- Mentor meme-uri: Autumn 2021 + Spring 2022
- Activități: Gala 2021
- HR Organisers: Summer 2022
- MO: Summer 2023
- Secretar PR: Managment + Extra Resp 2023-2024',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ana Rebecca Pintilii',
                'generatie' => 'Toamnă 2021',
                'anul_alumnizarii' => '2025',
                'activitati' => '- Marketing: JobShop 2022
- Coordonator: EBEC 2022
- Activități și petreceri: Aniversare Internă 2023
- Președinte: Managment + Extra Resp 2023-2024
- Marketing: iBEC 2024
- MDV: din vară 2022 pana în primăvară 2025',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Alexandru Achiței',
                'generatie' => 'Toamnă 2020',
                'anul_alumnizarii' => '2024',
                'activitati' => '- Activități: Jobshop 2021
- Coordonator: JobShop 2022',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Cătălin Butacu',
                'generatie' => 'Toamnă 2020',
                'anul_alumnizarii' => '2024',
                'activitati' => '- IT: BTW 2021
- IT:  Recrutări Autumn 2021
- Topicuri: Prove it 2022
- MO: JobShop 2023
- Coordonator departament IT: Management + Extra Resp 2023',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Elisaveta Crăciun',
                'generatie' => 'Toamnă 2021',
                'anul_alumnizarii' => '2024',
                'activitati' => '- FR: JobShop 2022
- Coordonator departament FR: Management + Extra Resp 2022
- HR pax: LTSP Evaluation SIM 2023',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'George Moroșanu',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2024',
                'activitati' => '- Mentor Meme-uri: Management + Extra Resp 2019
- Secretar HR: Management + Extra Resp 2019
- Coordonator: Recrutări Autumn 2020
- VP HR: Management+ Extra Resp 2020
- Coordonator: Recrutări Spring 2021
- PR: Summer 2022
- IT: EBEC 2022
- Coordonator: Prove It 2023',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ioana-Roxana Băcălie',
                'generatie' => 'Toamnă 2020',
                'anul_alumnizarii' => '2024',
                'activitati' => '- Interviuri, Training&BECaS: Recrutări Spring 2021
- Topicuri: EBEC 2021- PR: Recrutări Spring 2022
- Coordonator: Aniversare Internă 2022
- VP HR: Management + Extra Resp 2022
- Coordonator: Recrutări Autumn 2022
- Coordonator: Recrutări Spring 2023',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ioana-Teodora Spînu',
                'generatie' => 'Primăvară 2021',
                'anul_alumnizarii' => '2024',
                'activitati' => '- PR: LEoE 2021
- Coordonator WG Media: Management + Extra Resp 2021
- Design: EBEC 2021
- Marketing: Prove it 2023
- Coordonator departament PR: Management + Extra Resp 2023
- IT: Recrutări Autumn 2023',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Mara Păduraru',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2024',
                'activitati' => '- Secretar FR: Management + Extra Resp 2019
- PR: Aniversare Internă 2020
- FR: BTW 2020
- Coordonator: Aniversare Internă 2021
- Design: Prove it 2021 (first edition)
- MO: Summer 2022
- Președinte: Management + Extra Resp 2022
- Mentor Marketing: Management + Extra Resp 2023',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Nicoleta Barcan',
                'generatie' => 'Toamnă 2021',
                'anul_alumnizarii' => '2024',
                'activitati' => '- Secretar IT: Management + Extra Resp 2021
- IT: Prove it 2022
- Secretar General: Management + Extra Resp
- Interviuri, Training & BECaS: Recrutări Autumn 2022',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Smaranda Cozmîncă',
                'generatie' => 'Toamnă 2020',
                'anul_alumnizarii' => '2024',
                'activitati' => '- FR premii: Prove it 2021 (first edition)
- Trezorier: Management + Extra Resp 2021
- TOPICURI: Prove it 2023
- Coordonator: RoJAM 2023',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Alberto-Ionuț Toscariu',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2023',
                'activitati' => '- IT:  BTW 2020
- Coordonator WG BEST Events: Management + Extra Resp 2021
- Coordonator: LEoE 2021
- FR: EBEC 2022
- Best Mood: Autumn 2021
- IT: BCC 2021',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Apăvaloaiei Robert-Florin',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2023',
                'activitati' => '- IT:  Summer 2020
- Coordonator: BTW 2021
- IT : EBEC 2020
- Secretar: Management + Extra Resp 2021',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Dominic Simon',
                'generatie' => 'Toamnă 2020',
                'anul_alumnizarii' => '2023',
                'activitati' => '- PR: Recrutări Spring 2021
- Design: Prove it 2022
- Masa: Summer 2022
- Coordonator: Aniversare Internă 2023',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Grațiel-Ionuț Grădinaru',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2023',
                'activitati' => '- FR Produse: EBEC RRM 2018 Local
- HR: RBRC 2018
- IT: JobShop 2019
- Președinte: Management + Extra Resp
- Secretar: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ioana Flavia Botezatu',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2023',
                'activitati' => '- Activități: Jobshop 2020
- Podcast: Jobshop 2020
- HR: Prove it 2021 (first edition)
- Coordonator HR: Management + Extra Resp 2021
- Coordonator: Recrutări Spring 2022',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Popovici Iuliu Antoniu',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2023',
                'activitati' => '- IT: Jobshop 2021
- BEST Talk: BTW 2020
- IT: Recrutări Autumn 2020',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Rareș Crăciun',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2023',
                'activitati' => '- HR Pax: Summer 2020
- Interviuri, Training&BECaS: Recrutări Autumn 2020
- FR companii: Prove it 2021',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Antal Vladuț',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2023',
                'activitati' => '- FR produse: JobShop 2020
- Coordonator: Prove it 2022
- Design: Jobshop 2021',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Diana Pica',
                'generatie' => 'Toamnă 2019',
                'anul_alumnizarii' => '2023',
                'activitati' => '- PR: Summer 2020
- Coordonator: EBEC 2020',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Adrian Pricopioaia',
                'generatie' => 'Toamnă 2018',
                'anul_alumnizarii' => '2022',
                'activitati' => '- PR: Summer 2019
- Coordonator WG Best Events: Management + Extra Resp
- Coordonator: Gala 2021
- PR: EBEC 2020',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Andreea Alexandra Hromei',
                'generatie' => 'Toamnă 2016',
                'anul_alumnizarii' => '2022',
                'activitati' => '- EAD: Summer 2018
- Interviu,Training&BECAS: Recrutări 2018 Autumn
- FR companii: JobShop 2019
- Președinte: Management + Extra Resp
- FR: EBEC 2021',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Andrei Armașu',
                'generatie' => 'Primăvară 2019',
                'anul_alumnizarii' => '2022',
                'activitati' => '- Activități: Motivational Weekend 2019
- Interviu,Training&BECAS: Recrutări 2019 Autumn
- Promovare: Jobshop 2020
- Podcast: Jobshop 2020
- Coordonator: Recrutări Autumn 2021
- HR: Jobshop 2021',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Brânzilă Irina',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2022',
                'activitati' => '- Media: BTW 2018
- HR: EBEC 2020',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Cătălin Sfaițer',
                'generatie' => 'Toamnă 2018',
                'anul_alumnizarii' => '2022',
                'activitati' => '- Secretar IT:  Management + Extra Resp
- HR Pax: Summer 2019
- Marketing: Jobshop 2020
- Președinte: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ioana Macovei',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2022',
                'activitati' => '- FR: Summer 2018
- Media: JobShop 2018
- Cariere de success&Cocktail Party: Jobshop 2020
- Cariere de success: JobShop 2020
- Coordonator: EBEC 2021
- Marketing: EBEC 2020
- Responsabil Digital Marketing: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Petru Belibou',
                'generatie' => 'Toamnă 2018',
                'anul_alumnizarii' => '2022',
                'activitati' => '- Logistică: Aniversare Internă 2019
- VP HR: Management + Extra Resp
- Coordonator: Recrutări  Autumn
- Coordonator: Recrutări  Spring',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Petruța Brumă',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2022',
                'activitati' => '- IT&Logistică: Summer 2019
- Coordonator: BTW 2020
- Topicuri: ProveIt 2021
- Social: RoJam 2019',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Răzvan Fratiman',
                'generatie' => 'Primăvară 2019',
                'anul_alumnizarii' => '2022',
                'activitati' => '- Logistică: RoJAM 2019
- PR: BTW 2020
- MKT: EBEC 2021
- Coordonator WG Media: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ruxandra Simioniuc',
                'generatie' => 'Primăvară 2019',
                'anul_alumnizarii' => '2022',
                'activitati' => '- Activități: Summer 2019
- Coordonator: Summer 2020
- HR: RoJAM 2019
- Coordonator: Prove it 2021 ',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Codrin Valentin Rusu',
                'generatie' => 'Toamnă 2018',
                'anul_alumnizarii' => '2022',
                'activitati' => '- Logistică: BeKnown 2019
- Design: EBEC 2019
- Media: Jobshop 2020
- Coordonator WG Best Events: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Andreea Otilia Farcaș',
                'generatie' => 'Toamnă 2015',
                'anul_alumnizarii' => '2021',
                'activitati' => '- Coordonator: EBEC RRM 2018 Regional',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Gaman Petronela',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2021',
                'activitati' => '- IT: Gala Aniversară
- Interviu,Training&BECAS: Recrutări 2018 Spring
- Design EBEC 2018
- FR: BTW 2019
- HR: Jobshop 2020',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Georgian Roman',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2021',
                'activitati' => '- Promovare: JobShop 2019
- IT: Recrutări 2018 Autumn
- Secretar FR: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Marius Brumă',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2021',
                'activitati' => '- ITC: BTW 2018
- Topicuri: EBEC2018
- HR: BTW 2020
- Coordonator: EBEC 2019',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Sabin Rotariu',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2021',
                'activitati' => '- HR: BTW 2018
- Petreceri: Summer 2019
- Coordonator: EBEC 2018
- Coordonator: RoJam 2019
- Marketing: ProveIt 2021',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ana Maria Pușcașu',
                'generatie' => 'Toamnă 2016',
                'anul_alumnizarii' => '2020',
                'activitati' => '- FR: RM 2017
- PR: BTW 2017
- FR: EBEC 2017
- FR companii: 2018
- Trezorier: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ana-Maria Spiridon',
                'generatie' => 'Primăvară 2017',
                'anul_alumnizarii' => '2020',
                'activitati' => '- Logistică: Summer 2017
- Coordonator WG Grants: Management + Extra Resp
- PR: Recrutări Autumn 2017
- FR: EBEC RRM 2018 Regional',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ciubotaru Dan-Iulian',
                'generatie' => 'Primăvară 2016',
                'anul_alumnizarii' => '2020',
                'activitati' => '- HR Organizatori: EBEC RRM 2018 Local',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Delia Burdea',
                'generatie' => 'Toamnă 2016',
                'anul_alumnizarii' => '2020',
                'activitati' => '- Academic: Summer 2017
- PAX: Summer 2018
- Topicuri: EBEC 2017
- HR: JobShop
- MO și Academic: Summer 2019',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Grigoruț Narcisa',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2020',
                'activitati' => '- HR PAX: EBEC RRM 2018 Local
- VP HR: Management + Extra Resp
- Coordonator: Recrutări 2018 Autumn
- Coordonator: Recrutări 2019 Spring',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ilinca Turcu',
                'generatie' => 'Toamnă 2017',
                'anul_alumnizarii' => '2020',
                'activitati' => '- PR: Gala Aniversară
- PR: Summer 2018
- VP PR: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Ionuț Chinez',
                'generatie' => 'Primăvară 2017',
                'anul_alumnizarii' => '2020',
                'activitati' => '- Secretar general: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Irina Amariei',
                'generatie' => 'Primăvară 2017',
                'anul_alumnizarii' => '2020',
                'activitati' => '- MO Local:  EBEC RRM 2018 Local
- Coordonator WG BEST Events: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Irina Maria Radu',
                'generatie' => 'Toamnă 2016',
                'anul_alumnizarii' => '2020',
                'activitati' => '- PAX: RoBT 2017
- HR: EBEC 2017
- Coordonator: BTW 2019',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Maria-Elisa Roman',
                'generatie' => 'Toamnă 2016',
                'anul_alumnizarii' => '2020',
                'activitati' => '- Design: JobShop 2017
- Coordonator: Motivational Weekend 2019',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Petru Cristian Livadaru',
                'generatie' => 'Toamnă 2016',
                'anul_alumnizarii' => '2020',
                'activitati' => '- Masa: Summer 2017
- IT: EBEC 3017
- FR produse: JobShop 2018
- Coordonator: BeKnown 2019',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Teodora Hugeanu',
                'generatie' => 'Primăvară 2017',
                'anul_alumnizarii' => '2020',
                'activitati' => '- DO: BTW 2017
- Coordonator+ FR Cpy: BTW 2018
- Marketing: EBEC 2017
- Președinte: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nume' => 'Cătălin Crăiniceanu',
                'generatie' => 'Primăvară 2016',
                'anul_alumnizarii' => '2020',
                'activitati' => '- Mentor Design: Management + Extra Resp',
                'testimonial' => null,
                'acord_publicare' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

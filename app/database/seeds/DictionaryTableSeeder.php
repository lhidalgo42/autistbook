<?php


class DictionaryTableSeeder extends Seeder
{

    public function run()
    {
        Dictionary::create([
            'name' => 'Aleteo',
            'description' => 'El aleteo del ni&ntilde;o est&aacute; relacionado con su nivel de ansiedad o angustia frente a una situaci&oacute;n. generalmente cuando algo ha cambiado en su rutina cotidiana, cuando parte de esa rutina se ve alterada en orden o cantidad.',
            'solution' => 'Para bajar su nivel de ansiedad es necesario explicarle que solo por hoy las cosas se han realizado de una manera diferente y que todo estar&aacute; bien con eso. Luego para enfocar su atenci&oacute;n en otra cosa, servir&aacute;n mucho sus rompe cabezas y legos. '
        ]);

        Dictionary::create([
            'name' => 'Alteraci&oacute;n de la conciencia',
            'description' => 'Estado mental diferente, el ni&ntilde;o act&uacute;a raro. Se comunica de maneras diferentes a las habituales, por periodos se mantiene alerta y luego pasa a comportarse de forma agresiva.',
            'solution' => 'Cuando el ni&ntilde;o se comporta de esta manera es necesario tratar de distraer su atenci&oacute;n de lo que est&aacute; haciendo, para esto podemos colocarle un video de Peppa en youtube o Dumb ways to die y con eso se calmar&aacute;.'
        ]);
        Dictionary::create([
            'name' => 'Alteraci&oacute;n del sue&ntilde;o',
            'description' => 'El ni&ntilde;o no quiere ir a dormir, le toma mucho rato conciliar el sue&ntilde;o y cuando lo consigue despierta sobresaltado y comienza a gritar. Cuesta mucho volver a meterlo en su cama.',
            'solution' => 'Para lograr relajarlo es necesario llevarlo a su pieza y recostarlo sobre su cama, servir&aacute; de mucha ayuda si le pasan su osito y lo abrazan por un rato. Luego cuando est&eacute; mas calmo, hacerle cari&ntilde;o en la cabeza ayudar&aacute; mucho.'
        ]);
        Dictionary::create([
            'name' => 'Ataque de ira',
            'description' => 'Cuando esto sucede, comienza a lanzar objetos de la casa (lo que est&eacute; a su alcance) hacia las paredes o personas. Es probable que pegue manotazos.',
            'solution' => ' Es necesario llevarle sus juguetes a la pieza y dejarlo ah&iacute; por un periodo de 15 minutos aproximadamente y luego ir a su pieza y preguntarle como se siente. Luego de esto se le puede ofrecer ir a dar un paseo o ver Barney y se ir&aacute; calmando de a poco.'
        ]);
        Dictionary::create([
            'name' => 'Arrinconarse mirando la pared',
            'description' => 'Cuando el ni&ntilde;o se arrincona mirando la pared significa que est&aacute; incomodo y quiere estar solo. Esto suele pasar cuando hay personas que no conoce o cuando est&aacute; avergonzado por algo. Se ofusca mucho si tratan de sacarlo del lugar.',
            'solution' => 'Para que el ni&ntilde;o deje de hacer eso, hay que cantarle canciones de "cantando aprendo a hablar" o ponerlas en Youtube. Si esto no funciona, pasarle su Dinosaurio Dino podr&iacute;a ayudar.  Si el ni&ntilde;o no responde frente a esto es necesario dejarlo solo un rato.'
        ]);
        Dictionary::create([
            'name' => 'Arrinconarse y azotarse la cabeza',
            'description' => 'Cuando el ni&ntilde;o se molesta por algo, mas bien cuando se enoja va hacia una pared y comienza a golpearse la cabeza como medida de desahogo para liberar su rabia.',
            'solution' => 'Alejarlo de la pared, sostenerlo por los hombros suavemente y acariciarle la frente. Para que el pueda liberar su rabia, se le puede pasar un coj&iacute;n o muchos cojines para que golpee si lo necesita.'
        ]);

    }

}
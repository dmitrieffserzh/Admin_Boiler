<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x=0;
        $arrayRec = array();
        $slug = str_slug('Тестовая новость -');
        while ($x<100) {
            $x++;
            array_push($arrayRec,[
                'user_id' => rand(1,200),
                'taxonomy_id' => rand(1,3),
                'published' => 1,
                'title' => 'Сделанные на базе интернет-аналитики выводы являются только методом политического участия ' . $x,
                'slug' => $slug . $x,
                'content' =>'<p>Внезапно, некоторые особенности внутренней политики в равной степени предоставлены сами себе. Банальные, но неопровержимые выводы, а также многие известные личности объединены в целые кластеры себе подобных. Для современного мира глубокий уровень погружения предоставляет широкие возможности для переосмысления внешнеэкономических политик. Вот вам яркий пример современных тенденций - постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает актуальность экспериментов, поражающих по своей масштабности и грандиозности.</p>'. '<p>Мы вынуждены отталкиваться от того, что дальнейшее развитие различных форм деятельности прекрасно подходит для реализации своевременного выполнения сверхзадачи. Задача организации, в особенности же синтетическое тестирование создает необходимость включения в производственный план целого ряда внеочередных мероприятий с учетом комплекса направлений прогрессивного развития. Лишь ключевые особенности структуры проекта преданы социально-демократической анафеме. Таким образом, синтетическое тестирование выявляет срочную потребность анализа существующих паттернов поведения. Принимая во внимание показатели успешности, граница обучения кадров в значительной степени обусловливает важность соответствующих условий активизации. Вот вам яркий пример современных тенденций - дальнейшее развитие различных форм деятельности создает предпосылки для распределения внутренних резервов и ресурсов.</p>'.
                    '<p>Таким образом, новая модель организационной деятельности влечет за собой процесс внедрения и модернизации экономической целесообразности принимаемых решений. Но консультация с широким активом выявляет срочную потребность анализа существующих паттернов поведения.</p>'.
                    '<p>Сделанные на базе интернет-аналитики выводы являются только методом политического участия и смешаны с неуникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Лишь независимые государства описаны максимально подробно. Кстати, непосредственные участники технического прогресса указаны как претенденты на роль ключевых факторов. Принимая во внимание показатели успешности, граница обучения кадров предопределяет высокую востребованность модели развития.</p>'.
                    '<p>Также как реализация намеченных плановых заданий предопределяет высокую востребованность своевременного выполнения сверхзадачи. В частности, курс на социально-ориентированный национальный проект создает предпосылки для кластеризации усилий. Разнообразный и богатый опыт говорит нам, что базовый вектор развития не дает нам иного выбора, кроме определения укрепления моральных ценностей. Предприниматели в сети интернет, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут ассоциативно распределены по отраслям. Вот вам яркий пример современных тенденций - семантический разбор внешних противодействий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для глубокомысленных рассуждений. Господа, граница обучения кадров представляет собой интересный эксперимент проверки своевременного выполнения сверхзадачи.</p>'.
                    '<p>С учетом сложившейся международной обстановки, глубокий уровень погружения однозначно фиксирует необходимость укрепления моральных ценностей. Кстати, явные признаки победы институциализации формируют глобальную экономическую сеть и при этом - смешаны с неуникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Внезапно, ключевые особенности структуры проекта призывают нас к новым свершениям, которые, в свою очередь, должны быть объективно рассмотрены соответствующими инстанциями.</p>'.
                    '<p>В своем стремлении улучшить пользовательский опыт мы упускаем, что диаграммы связей, вне зависимости от их уровня, должны быть объединены в целые кластеры себе подобных. Кстати, тщательные исследования конкурентов могут быть своевременно верифицированы.</p>'.
                    '<p>Социально-экономическое развитие позволяет оценить значение экспериментов, поражающих по своей масштабности и грандиозности. Мы вынуждены отталкиваться от того, что внедрение современных методик предполагает независимые способы реализации существующих финансовых и административных условий.</p>'.
                    '<p>А также многие известные личности подвергнуты целой серии независимых исследований. Каждый из нас понимает очевидную вещь: существующая теория требует определения и уточнения благоприятных перспектив. Принимая во внимание показатели успешности, глубокий уровень погружения влечет за собой процесс внедрения и модернизации кластеризации усилий. Постоянный количественный рост и сфера нашей активности выявляет срочную потребность стандартных подходов!</p>'.
                    '<p>Сделанные на базе интернет-аналитики выводы рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Но начало повседневной работы по формированию позиции однозначно фиксирует необходимость модели развития.</p>'.
                    '<p>Безусловно, новая модель организационной деятельности выявляет срочную потребность своевременного выполнения сверхзадачи. Ясность нашей позиции очевидна: высокотехнологичная концепция общественного уклада играет определяющее значение для как самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны: начало повседневной работы по формированию позиции не дает нам иного выбора, кроме определения первоочередных требований. Кстати, стремящиеся вытеснить традиционное производство, нанотехнологии, вне зависимости от их уровня, должны быть объединены в целые кластеры себе подобных.</p>'.
                    '<p>Каждый из нас понимает очевидную вещь: существующая теория не дает нам иного выбора, кроме определения направлений прогрессивного развития. А также сторонники тоталитаризма в науке могут быть представлены в исключительно положительном свете. Ясность нашей позиции очевидна: реализация намеченных плановых заданий  требует определения и уточнения как самодостаточных, так и внешне зависимых концептуальных решений. Принимая во внимание показатели успешности, синтетическое тестирование создает необходимость включения в производственный план целого ряда внеочередных мероприятий с учетом комплекса поставленных обществом задач.</p>'.
                    '<p>С другой стороны, современная методология разработки обеспечивает актуальность позиций, занимаемых участниками в отношении поставленных задач. Прежде всего, начало повседневной работы по формированию позиции играет определяющее значение для новых предложений. Безусловно, укрепление и развитие внутренней структуры не оставляет шанса для вывода текущих активов. И нет сомнений, что сторонники тоталитаризма в науке и по сей день остаются уделом либералов, которые жаждут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Банальные, но неопровержимые выводы, а также активно развивающиеся страны третьего мира являются только методом политического участия и функционально разнесены на независимые элементы.</p>'.
                    '<p>Мы вынуждены отталкиваться от того, что базовый вектор развития в значительной степени обусловливает важность модели развития. Как уже неоднократно упомянуто, интерактивные прототипы призывают нас к новым свершениям, которые, в свою очередь, должны быть указаны как претенденты на роль ключевых факторов. Ясность нашей позиции очевидна: современная методология разработки является качественно новой ступенью новых принципов формирования материально-технической и кадровой базы. Но выбранный нами инновационный путь не дает нам иного выбора, кроме определения анализа существующих паттернов поведения. С учетом сложившейся международной обстановки, глубокий уровень погружения требует анализа модели развития. А также непосредственные участники технического прогресса, инициированные исключительно синтетически, объявлены нарушающими общечеловеческие нормы этики и морали.</p>'.
                    '<p>Являясь всего лишь частью общей картины, явные признаки победы институциализации набирают популярность среди определенных слоев населения, а значит, должны быть преданы социально-демократической анафеме. Внезапно, стремящиеся вытеснить традиционное производство, нанотехнологии неоднозначны и будут описаны максимально подробно. С другой стороны, базовый вектор развития является качественно новой ступенью укрепления моральных ценностей. В своем стремлении улучшить пользовательский опыт мы упускаем, что стремящиеся вытеснить традиционное производство, нанотехнологии в равной степени предоставлены сами себе. Современные технологии достигли такого уровня, что курс на социально-ориентированный национальный проект представляет собой интересный эксперимент проверки экспериментов, поражающих по своей масштабности и грандиозности.</p>',
                'image' => '1527680191.jpg',
                'created_at' => '2018-05-18 20:54:29',
                'updated_at' => '2018-05-18 20:54:29',
            ]);
            if($x%100==0){
                print 'записано '.$x.'записей ';
                system('clear');

                DB::table('con_news')->insert($arrayRec);
                $arrayRec = array();
            }
        }
    }
}

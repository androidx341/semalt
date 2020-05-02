@extends('layout')

@section('content')
    <div>
        <h5 class="mt-5">Напишите запрос, который выберет имя пользователя (bids.name) с самой высокой ценой заявки (bids.price)</h5>
        <code>SELECT bids.name FROM  bids  ORDER BY  price  desc LIMIT 1</code>
        <p class="alert alert-primary">{{ $userMaxPrice }}</p>
    </div>
    <div>
        <h5 class="mt-5">Напишите запрос, который выберет название мероприятия (events.caption), по которому нет заявок</h5>
        <code>
            SELECT  events . caption  <br>
            FROM  events <br>
            LEFT JOIN  bids  ON  events . id  =  bids . id_event <br>
            WHERE  bids . id  IS NULL</code>
        <p class="alert alert-primary">{{ $eventNoBids }}</p>
    </div>
    <div>
        <h5 class="mt-5">Напишите запрос, который выберет название мероприятия (events.caption), по которому больше трех заявок</h5>
        <code>
            SELECT  events . caption  FROM  events  <br>
            JOIN (SELECT  id_event , COUNT( id ) AS  count_bids  FROM  bids  <br>
            GROUP BY  id_event  <br>
            HAVING  count_bids  > 3) c ON c.id_event = events.id <br>
            LIMIT 1
        </code>
        <p class="alert alert-primary">{{ $threeBidsEvent }}</p>
    </div>
    <div>
        <h5 class="mt-5">Напишите запрос, который выберет название мероприятия (events.caption), по которому больше всего заявок</h5>
        <code>
            SELECT events.caption <br>
            FROM laravel.events <br>
            JOIN (SELECT id_event, COUNT(id) as count_bids <br>
            FROM bids <br>
            GROUP BY id_event <br>
            ORDER BY count_bids DESC <br>
            LIMIT 1 <br>
            ) c ON c.id_event = events.id <br>
            LIMIT 1
        </code>
        <p class="alert alert-primary">{{ $maxBidsEvent }}</p>
    </div>
@endsection

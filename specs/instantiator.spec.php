<?php

use mrkrstphr\Instantiator\Instantiator;

describe(Instantiator::class, function () {
    describe('instantiate()', function () {
        it('should instantiate the object passing the supplied values', function () {
            $instantiator = new Instantiator();
            $object = $instantiator->instantiate(
                DateTime::class,
                ['time' => '5/15/2015', 'object' => new DateTimeZone('America/Chicago')]
            );
            expect($object->format('n/d/Y'))->to->equal('5/15/2015');
            expect($object->getTimeZone()->getName())->to->equal('America/Chicago');
        });

        it('should work with no args', function () {
            $instantiator = new Instantiator();
            $object = $instantiator->instantiate(DateTime::class);
        });
    });
});

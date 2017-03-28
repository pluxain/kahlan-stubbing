<?php

describe('function stubbing', function() {

    it('stubs a function properly', function() {
        allow('testStubbing')->toBeCalled()->andReturn('Function stubbing hijacked you !');
        expect(testStubbing())->toBe('Function stubbing hijacked you !');
    });

});

<?php

describe('function stubbing', function() {

    it('stubs a function properly', function() {
        allow('testStubbing')->toBeCalled()->andReturn('Function stubbing hijacked you !');
        expect(testStubbing())->toBe('Function stubbing hijacked you !');
    });

    it('stubs a function even when called from another function', function() {
        allow('testStubbing')->toBeCalled()->andReturn('Function stubbing hijacked you !');
        expect(callTestStubbing())->toBe('Function stubbing hijacked you !');
    });

});

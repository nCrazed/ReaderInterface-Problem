## ReaderInterface Problem

A simple demonstration of a problem with the XLSX implementation of the
ReaderInterface defined in the `box\spout` composer package.

`Box\Spout\Reader\XLSX` calims to implement the `ReaderInterface`, but if you
attempt to interact with it is if it was an implementation of the interface
(open file, read row by row, close file) a BadUsageException is thrown with a
notification that additional methods (that are not defined on the interface)
should be used.

This indicates that the `XLSX` does not actually implement the interface,
instead it simply implements the metheods of the interface in a way that is not
compatible with the usage pattern defined by the interface.

### Usage

```bash
git clone git@github.com:nCrazed/ReaderInterface-Problem.git
cd ReaderInterface-Problem
composer install
phpunit
```

<p align="center">
<img src="https://i17.servimg.com/u/f17/11/13/61/32/clike10.png" width="270">
</p>
<p align="center">
 <a href="https://scrutinizer-ci.com/g/degraciamathieu/clike/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Clike/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://travis-ci.org/DeGraciaMathieu/Clike"><img src="https://travis-ci.org/DeGraciaMathieu/Clike.svg?branch=master" alt="Build Status"></a>
<a href="https://scrutinizer-ci.com/g/DeGraciaMathieu/Clike/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Clike/badges/coverage.png?b=master" alt="Code Coverage"></a>
</p>

# DeGraciaMathieu/Clike

## Installation
 
Run in console below command to download package to your project:

```
composer require degraciamathieu/clike
```

## Usage

### Create an command

A command is a class that must implement the interface ```DeGraciaMathieu\Clike\Contracts\Command::class```.

The following example is a valid command.

```php
use DeGraciaMathieu\Clike\Lines;
use DeGraciaMathieu\Clike\Contracts;

class Clear implements Contracts\Command {

    public function description() :Contracts\Line
    {
        return new Lines\Description('Description...');
    }

    public function authorized() :bool
    {
        return true;
    }

    public function binding() :string
    {
        return '/clear';
    }

    public function process() :void
    {
        // foo
    }

    public function output() :array
    {
        return [
            new Lines\Info('Output text...'),
        ];
    }
}
```

### Execute an command

Now let's play with our Clear command.

```php
use DeGraciaMathieu\Clike\Command;

$command = new Command();
$command->execute(new Clear());
```

After checking that we can use this command with the ```authorized``` method this code will execute the ```process``` method of our command.

To finally execute the ```output``` method displaying the following result.

```php
// array:2 [
//   "timestamp" => 1531339693
//   "lines" => array:1 [
//     0 => array:2 [
//       "type" => "info"
//       "content" => "Output text..."
//     ]
//   ]
// ]
```

### Execute an command with Terminal

```php
use DeGraciaMathieu\Clike\Terminal;

$terminal = new Terminal([
    Clear::class,
]);
$terminal->execute('/clear');
```
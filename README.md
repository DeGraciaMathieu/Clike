<p align="center">
<img src="https://i17.servimg.com/u/f17/11/13/61/32/clike10.png" width="270">
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

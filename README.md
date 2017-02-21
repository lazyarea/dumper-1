# dump Array
### php logger
```
use Nagomien\Logger\Warn;

$warn = new Warn();
$warn->dumper("strings",[2]);
```
```
$ cat /tmp/dumper.log
[2017-02-21 17:06:55] [strings] [Array
(
    [0] => 2
)
]
```
#### dump your file
```
use Nagomien\Logger\Warn;

$warn = new Warn("/path/to/file");
$warn->dumper("strings",[2]);
```
```
$ cat /path/to/file
[2017-02-21 17:06:55] [strings] [Array
(
    [0] => 2
)
]
```
# dump object
```
use Nagomien\Logger\Warn;

$warn = new Warn();
$warn->dumper("strings",$warn);
```
```
$ cat /tmp/dumper.log
[2017-02-21 17:59:37] [1] [Nagomien\Logger\Warn Object
(
    [fpath:Nagomien\Logger\Warn:private] => /tmp/dumper.log
)
]
```


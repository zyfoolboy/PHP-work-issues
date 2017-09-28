# PHP 导入 CSV

* 使用 PHP 导入 CSV 如果 CSV 文件的换行符是 **\r** 的话，一般是识别不出来的在载入 CSV 文件前加入代码
```ini_set("auto_detect_line_endings", true);```

* 下载 csv 文件

```

    public function downloadCSV(Request $request)
    {
        $csv_header = ['products_title', 'username', 'avatar', 'products_attributes', 'th_comment', 'en_comment'];
        $csv_body   = ['芭比娃娃', '随便写', '头像地址', '标准', '这里是泰语评论', '这里是英语评论'];
        // 打开文件资源，不存在则创建
        $fp = fopen('评论模版.csv', 'a');
        // 处理头部标题
        fputcsv($fp, $csv_header);
        fputcsv($fp, $csv_body);

        header('Content-type: text/csv;charset=UTF-8');

        //下载显示的名字
        header('Content-Disposition: attachment; filename="评论模版.csv"');

        readfile('评论模版.csv');
        fclose($fp);
        unlink('评论模版.csv');
        exit;
    }
    
```


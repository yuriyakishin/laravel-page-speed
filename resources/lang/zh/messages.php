<?php

return [
    'form' => [
        'label' => '页面地址',
        'button' => '检查',
        'hint' => '免费 · 无需注册 · 每小时最多 :count 次 · 最长约一分钟',
    ],
    'loading' => [
        'mobile' => 'Google 正在手机上加载页面',
        'desktop' => 'Google 正在电脑上加载页面',
        'checks' => '正在读取 Core Web Vitals 和问题',
    ],
    'errors' => [
        'quota' => '速度服务今天的 Google 配额已用完，请明天再试',
        'unreachable' => 'Google 无法打开该页面，请检查地址以及网站是否正常运行',
        'timeout' => 'Google 未能及时完成检查，请重试',
    ],
    'verdicts' => [
        'ready' => '页面速度很快',
        'almost' => '页面速度基本很快',
        'partly' => '页面部分地方较慢',
        'not_ready' => '页面速度较慢',
    ],
    'scores' => [
        'title' => 'Lighthouse 得分',
        'mobile' => '手机',
        'desktop' => '电脑',
        'field_page' => '下面的 Core Web Vitals 来自该页面过去 28 天真实 Chrome 用户的数据。',
        'field_origin' => '该页面本身访问量太少：下面的 Core Web Vitals 来自整个网站过去 28 天真实用户的数据。',
        'lab_only' => 'Google 还没有该网站真实用户的数据：下面的 Core Web Vitals 来自实验室测试。',
    ],
    'categories' => [
        'performance' => '性能',
        'accessibility' => '无障碍',
        'best-practices' => '最佳做法',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => '最拖慢页面的问题',
        'note' => '来自 Google Lighthouse 的手机测试，按节省效果从大到小排列。',
        'saves_time' => '−:value 秒',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => '性能', 'text' => '手机和电脑上的 Lighthouse 性能得分'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'Google 在搜索中使用的速度指标（手机）'],
        'Q' => ['title' => 'SEO、无障碍、最佳做法', 'text' => '手机测试中的其他 Lighthouse 得分'],
    ],
    'checks' => [
        'P1' => [
            'title' => '页面在手机上快吗？',
            'text' => '移动端 Lighthouse 性能 90 以上',
            'fix' => '从报告下方的“最拖慢页面的问题”开始：列表按每项修复能节省的时间排序。最常见的是过大的图片、过多的 JavaScript 以及延迟文字显示的字体。',
            'notes' => [
                'ok' => '手机性能：:score / 100。',
                'average' => '手机性能：:score / 100。Google 在排名中会考虑手机上的速度。',
                'poor' => '手机性能：:score / 100。手机访客等不及就会离开。',
                'none' => 'Lighthouse 没有给出得分。',
            ],
        ],
        'P2' => [
            'title' => '页面在电脑上快吗？',
            'text' => '桌面端 Lighthouse 性能 90 以上',
            'fix' => '修复方法与手机相同：由于电脑的处理器和网络更快，影响相对较小。',
            'notes' => [
                'ok' => '电脑性能：:score / 100。',
                'average' => '电脑性能：:score / 100。',
                'poor' => '电脑性能：:score / 100：即使在快速的电脑上页面也很慢。',
                'none' => 'Lighthouse 没有给出得分。',
            ],
        ],
        'V1' => [
            'title' => '主要内容多快出现？',
            'text' => 'Largest Contentful Paint 不超过 2.5 秒',
            'fix' => '加快首屏最大的图片或文字块：压缩图片并以 WebP 或 AVIF 提供，优先加载且不要延迟加载，并让服务器更快响应。',
            'notes' => [
                'ok' => '主要内容在 :value 后出现。',
                'average' => '主要内容在 :value 后出现；良好标准为 :good 以内。',
                'poor' => '主要内容要 :value 后才出现；良好标准为 :good 以内。很多访客会提前离开。',
                'none' => '没有 LCP 测量值。',
            ],
        ],
        'V2' => [
            'title' => '页面加载时会跳动吗？',
            'text' => 'Cumulative Layout Shift 不超过 0.1',
            'fix' => '为每张图片、每个视频和广告位设置宽度和高度，用备用字体立即显示文字，页面加载后不要在内容上方插入横幅。',
            'notes' => [
                'ok' => '页面稳定：CLS :value。',
                'average' => '页面略有跳动：CLS :value；良好标准为 :good 以内。',
                'poor' => '页面跳动明显：CLS :value；良好标准为 :good 以内。用户会点错按钮。',
                'none' => '没有 CLS 测量值。',
            ],
        ],
        'V3' => [
            'title' => '页面对点击的响应快吗？',
            'text' => 'Interaction to Next Paint 不超过 200 毫秒',
            'fix' => '减少并延后加载 JavaScript：拆分脚本，移除不用的库和小组件，把统计和在线聊天推迟到页面加载完成后。',
            'notes' => [
                'ok' => '页面在 :value 内响应。',
                'average' => '页面在 :value 内响应；良好标准为 :good 以内。',
                'poor' => '页面要 :value 才响应；良好标准为 :good 以内。按钮看起来像坏了。',
                'none' => '没有响应时间的测量值。',
            ],
        ],
        'V4' => [
            'title' => '服务器响应快吗？',
            'text' => '服务器响应不超过 0.8 秒',
            'fix' => '加快服务器：开启页面和数据库缓存、压缩和更新版本的 PHP；如果服务器离访客很远，换用更好的主机或 CDN。',
            'notes' => [
                'ok' => '服务器在 :value 内响应。',
                'average' => '服务器在 :value 内响应；良好标准为 :good 以内。',
                'poor' => '服务器要 :value 才响应；良好标准为 :good 以内。其他一切都在等它。',
                'none' => '没有服务器响应的测量值。',
            ],
        ],
        'Q1' => [
            'title' => '搜索引擎能读懂页面吗？',
            'text' => 'Lighthouse SEO 90 以上',
            'fix' => '在 Chrome DevTools → Lighthouse → SEO 中打开页面即可看到每一项，最常见的是缺少 meta description、链接没有文字或点按区域太小。',
            'notes' => [
                'ok' => 'SEO：:score / 100。',
                'average' => 'SEO：:score / 100。',
                'poor' => 'SEO：:score / 100：搜索引擎可能无法正确理解页面。',
                'none' => 'Lighthouse 没有给出得分。',
            ],
        ],
        'Q2' => [
            'title' => '所有人都能使用这个页面吗？',
            'text' => 'Lighthouse 无障碍 90 以上',
            'fix' => '最常见的是：文字对比度不足、图片没有替代文字、按钮和输入框没有名称。Chrome DevTools → Lighthouse → Accessibility 会列出每一处。',
            'notes' => [
                'ok' => '无障碍：:score / 100。',
                'average' => '无障碍：:score / 100。',
                'poor' => '无障碍：:score / 100：视力较弱或使用读屏软件的人会很难使用。',
                'none' => 'Lighthouse 没有给出得分。',
            ],
        ],
        'Q3' => [
            'title' => '页面是否遵循现代规范？',
            'text' => 'Lighthouse 最佳做法 90 以上',
            'fix' => '最常见的是：浏览器控制台中的错误、图片分辨率低于显示尺寸、带有已知漏洞的旧版库。Chrome DevTools → Lighthouse → Best practices 会列出每一处。',
            'notes' => [
                'ok' => '最佳做法：:score / 100。',
                'average' => '最佳做法：:score / 100。',
                'poor' => '最佳做法：:score / 100。',
                'none' => 'Lighthouse 没有给出得分。',
            ],
        ],
    ],
];

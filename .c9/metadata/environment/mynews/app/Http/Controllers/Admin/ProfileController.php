{"filter":false,"title":"ProfileController.php","tooltip":"/mynews/app/Http/Controllers/Admin/ProfileController.php","undoManager":{"mark":24,"position":24,"stack":[[{"start":{"row":6,"column":1},"end":{"row":6,"column":36},"action":"remove","lines":["se Illuminate\\Support\\Facades\\Auth;"],"id":76},{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"remove","lines":["u"]}],[{"start":{"row":10,"column":0},"end":{"row":13,"column":5},"action":"remove","lines":["      public function home() {","        $user_id = Auth::id();","        return view('user.home', compact('user_id'));","    }"],"id":77}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"insert","lines":["u"],"id":78},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"insert","lines":["s"]},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":[" "],"id":79}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["A"],"id":80},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["p"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["p"]}],[{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["\\"],"id":81}],[{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["P"],"id":82},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["r"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["o"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["f"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["i"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["l"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":[":"],"id":83}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":[":"],"id":84}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":[","],"id":85}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":[","],"id":86}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":[";"],"id":87}],[{"start":{"row":22,"column":1},"end":{"row":27,"column":7},"action":"remove","lines":["if (isset($form['image'])) {","        $path = $request->file('image')->store('public/image');","        $news->image_path = basename($path);","      } else {","          $news->image_path = null;","      }"],"id":88}],[{"start":{"row":43,"column":20},"end":{"row":43,"column":21},"action":"remove","lines":["e"],"id":89},{"start":{"row":43,"column":19},"end":{"row":43,"column":20},"action":"remove","lines":["l"]},{"start":{"row":43,"column":18},"end":{"row":43,"column":19},"action":"remove","lines":["i"]},{"start":{"row":43,"column":17},"end":{"row":43,"column":18},"action":"remove","lines":["f"]},{"start":{"row":43,"column":16},"end":{"row":43,"column":17},"action":"remove","lines":["o"]},{"start":{"row":43,"column":15},"end":{"row":43,"column":16},"action":"remove","lines":["r"]},{"start":{"row":43,"column":14},"end":{"row":43,"column":15},"action":"remove","lines":["P"]}],[{"start":{"row":43,"column":10},"end":{"row":43,"column":11},"action":"remove","lines":["s"],"id":90},{"start":{"row":43,"column":9},"end":{"row":43,"column":10},"action":"remove","lines":["w"]},{"start":{"row":43,"column":8},"end":{"row":43,"column":9},"action":"remove","lines":["e"]},{"start":{"row":43,"column":7},"end":{"row":43,"column":8},"action":"remove","lines":["n"]}],[{"start":{"row":43,"column":7},"end":{"row":43,"column":8},"action":"insert","lines":["p"],"id":91},{"start":{"row":43,"column":8},"end":{"row":43,"column":9},"action":"insert","lines":["r"]},{"start":{"row":43,"column":9},"end":{"row":43,"column":10},"action":"insert","lines":["o"]},{"start":{"row":43,"column":10},"end":{"row":43,"column":11},"action":"insert","lines":["f"]}],[{"start":{"row":43,"column":11},"end":{"row":43,"column":12},"action":"insert","lines":["i"],"id":92},{"start":{"row":43,"column":12},"end":{"row":43,"column":13},"action":"insert","lines":["l"]},{"start":{"row":43,"column":13},"end":{"row":43,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":43,"column":17},"end":{"row":43,"column":18},"action":"remove","lines":["P"],"id":93}],[{"start":{"row":43,"column":17},"end":{"row":43,"column":18},"action":"insert","lines":["P"],"id":94},{"start":{"row":43,"column":18},"end":{"row":43,"column":19},"action":"insert","lines":["P"]}],[{"start":{"row":43,"column":18},"end":{"row":43,"column":19},"action":"remove","lines":["P"],"id":95}],[{"start":{"row":55,"column":10},"end":{"row":55,"column":11},"action":"remove","lines":["s"],"id":96},{"start":{"row":55,"column":9},"end":{"row":55,"column":10},"action":"remove","lines":["w"]},{"start":{"row":55,"column":8},"end":{"row":55,"column":9},"action":"remove","lines":["e"]},{"start":{"row":55,"column":7},"end":{"row":55,"column":8},"action":"remove","lines":["n"]}],[{"start":{"row":55,"column":7},"end":{"row":55,"column":8},"action":"insert","lines":["p"],"id":97},{"start":{"row":55,"column":8},"end":{"row":55,"column":9},"action":"insert","lines":["r"]},{"start":{"row":55,"column":9},"end":{"row":55,"column":10},"action":"insert","lines":["o"]},{"start":{"row":55,"column":10},"end":{"row":55,"column":11},"action":"insert","lines":["f"]},{"start":{"row":55,"column":11},"end":{"row":55,"column":12},"action":"insert","lines":["i"]},{"start":{"row":55,"column":12},"end":{"row":55,"column":13},"action":"insert","lines":["l"]},{"start":{"row":55,"column":13},"end":{"row":55,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":10},"end":{"row":19,"column":11},"action":"remove","lines":["s"],"id":98},{"start":{"row":19,"column":9},"end":{"row":19,"column":10},"action":"remove","lines":["w"]},{"start":{"row":19,"column":8},"end":{"row":19,"column":9},"action":"remove","lines":["e"]},{"start":{"row":19,"column":7},"end":{"row":19,"column":8},"action":"remove","lines":["n"]}],[{"start":{"row":19,"column":7},"end":{"row":19,"column":8},"action":"insert","lines":["p"],"id":99},{"start":{"row":19,"column":8},"end":{"row":19,"column":9},"action":"insert","lines":["r"]},{"start":{"row":19,"column":9},"end":{"row":19,"column":10},"action":"insert","lines":["o"]},{"start":{"row":19,"column":10},"end":{"row":19,"column":11},"action":"insert","lines":["f"]},{"start":{"row":19,"column":11},"end":{"row":19,"column":12},"action":"insert","lines":["i"]},{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"insert","lines":["l"]},{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":28,"column":41},"end":{"row":28,"column":42},"action":"remove","lines":["'"],"id":100},{"start":{"row":28,"column":40},"end":{"row":28,"column":41},"action":"remove","lines":["e"]},{"start":{"row":28,"column":39},"end":{"row":28,"column":40},"action":"remove","lines":["t"]},{"start":{"row":28,"column":38},"end":{"row":28,"column":39},"action":"remove","lines":["a"]},{"start":{"row":28,"column":37},"end":{"row":28,"column":38},"action":"remove","lines":["e"]},{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"remove","lines":["r"]},{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"remove","lines":["c"]},{"start":{"row":28,"column":34},"end":{"row":28,"column":35},"action":"remove","lines":["/"]}]]},"ace":{"folds":[],"scrolltop":227,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":83,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":12,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1630762650009,"hash":"5659a0f762623ac6c06c4b8ab585bb67b7b7a1c3"}
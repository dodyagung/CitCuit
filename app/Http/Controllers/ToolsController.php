<?php

namespace App\Http\Controllers;

class ToolsController extends Controller {

    public static function getAutotext() {
        return [
            'Symbol' => [
                ':up' => '↑',
                ':right' => '→',
                ':down' => '↓',
                ':left' => '←',
                ':upright' => '↗',
                ':upleft' => '↖',
                ':club' => '♣',
                ':heart' => '♥',
                ':spade' => '♠',
                ':diamond' => '♦',
                '<3' => '♡',
                ':0:' => 'º',
                ':1:' => '¹',
                ':2:' => '²',
                ':3:' => '³',
                ':(1)' => '①',
                ':(2)' => '②',
                ':(3)' => '③',
                ':(4)' => '④',
                ':(5)' => '⑤',
                ':(6)' => '⑥',
                ':(7)' => '⑦',
                ':(8)' => '⑧',
                ':1/2:' => '½',
                ':1/4:' => '¼',
                ':3/4:' => '¾',
                ':tm:' => '™',
                ':r:' => '®',
                ':p:' => '℗',
                ':c:' => '©',
                ':=:' => '≠',
                ':ae:' => 'æ',
                ':E:' => 'Ξ',
                ':?:' => '¿',
                ':~:' => '≈',
                ':¤:' => '☀',
                ':+:' => '╬',
                '>>' => '»',
                '<<' => '«',
                '|>' => '►',
                '<|' => '◄',
                '+/-' => '±',
                'o+' => '♀',
                'o->' => '♂',
                ':=):' => 'ツ',
                ':=P:' => '=Þ',
                ':=p:' => '=Þ',
                '\'.\'' => '˘•˘',
                ':black' => '☻',
                ':1check' => '✔',
                ':2check' => '☑',
                ':3check' => '√',
                ':euro' => '€',
                ':flower' => '✿',
                ':infi' => '∞',
                ':kupu' => 'ੴ',
                ':love' => 'ღ',
                ':music' => '♫',
                ':ohm' => 'Ω',
                ':pound' => '£',
                ':sad' => '☹',
                ':salah' => '✖',
                ':smile' => '☺',
                ':star' => '★',
                ':sun' => '☼',
                ':1sun' => '¤',
                ':unchecked' => '☐',
                ':1unchecked' => '◇',
                ':yen' => '¥',
            ],
            'Expresion' => [
                ':lo' => '┐(‾o‾┐)',
                ':1lo' => '┒(\'o\' ┒)',
                ':gue' => '(┌‾,‾┐)',
                ':1gue' => '(┎ \'_\' ┒)',
                ':end' => '┐(˘–˘ )┌',
                ':1end' => '┒(ˇ_ˇ)┎',
                ':^_^' => '(⌒˛⌒ )',
                ':^^' => '◦^⌣^◦',
                ':aduh' => 'ε(╯△╰")з',
                ':1aduh' => '(っ╯_╰c)',
                ':2aduh' => '(ー`,´ー")',
                ':angkat' => 'ƪ(˘˛˘)ʃ',
                ':1angkat' => '┌(˘⌣˘)ʃ',
                ':2angkat' => 'ƪ(˘⌣˘)┐',
                ':3angkat' => 'ƪ(‾ε‾")ʃ',
                ':4angkat' => '(∫˘´_`˘)∫',
                ':angry' => '╰(◣﹏◢)╯',
                ':arm' => '(˘-˘)ง',
                ':babi' => '(´(••)`)',
                ':bc' => '█▇▆▅▄▃▂',
                ':1bc' => '▁▂▃▄▅▆▇▉',
                ':bintang' => '★_★',
                ':bisik' => '( - ͡. - ͡ !)ε( - ˛. - ̃)зε(¬.¬)зε( - ̃͡-̮ - ̃͡)з( - ̃o - ̃)',
                ':blush' => 'O(◦♥///Δ///♥◦)O',
                ':bodoh' => '>.<9',
                ':cantik' => '(✿◠‿◠)',
                ':citcuit' => 'ҪїҬҫυΪ‡',
                ':clink' => '​‎​（＾＿－）≡★',
                ':cry' => '(╥_╥)',
                ':1cry' => '(-̩̩̩-̩̩̩_-̩̩̩-̩̩̩)',
                ':2cry' => '(˘̩̩̩╭╮˘̩̩̩)',
                ':3cry' => '(˘̩̩̩.˘̩ƪ)',
                ':4cry' => 'ಥ_ಥ',
                ':5cry' => '(╥﹏╥)',
                ':6cry' => '(∏―∏)',
                ':7cry' => '(ಠ_ರೃ)',
                ':congrat' => 'ξ\(⌒.⌒)/ξ',
                ':cubit' => '(ˇ▼ˇ)-c<ˇ_ˇ)',
                ':cupcup' => '( \'́⌣\'̀)/(˘̩̩ε˘̩ƪ)',
                ':cute' => '​‎​(•̯͡.•̯͡)',
                ':1cute' => '(•ˆ⌣ˆ​​​​•)',
                ':dance' => '~(‾▿‾)~',
                ':1dance' => '~(‾▿‾~)',
                ':2dance' => '(~‾▿‾)~',
                ':3dance' => '~(ˆ▽ˆ~) ~(ˆ▽ˆ)~ (~ˆ▽ˆ)~',
                ':4dance' => '~(˘ε˘ ~) \(˘o˘)/ (~˘з˘)~',
                ':5dance' => 'ƪ(˘•˘`”)┐ƪ(˘•˘`”)ʃ',
                ':dasar' => '(¬_¬)',
                ':1dasar' => '(ˇ_ˇ\'\')',
                ':2dasar' => '(–˛ — º)',
                ':3dasar' => '("˘ _˘ ")',
                ':4dasar' => '(‾~‾“)',
                ':emosi' => '(۳ ˚Д˚)۳',
                ':fuck' => '┌П┐(►˛◄)┌П┐',
                ':1fuck' => '┌П┐(︶へ︶ メ)',
                ':funny' => '♪┏(・o･)┛♪┗ ( ･o･) ┓♪┏ (・o･) ┛♪┗ (･o･ ) ┓♪┏(･o･)┛♪',
                ':gawat' => '\(°△°!!)/ \(!! °△°)/',
                ':galau' => '(╯︵╰,)',
                ':gatau' => '┒(\'_\')┎',
                ':1gatau' => '┒(╯_╰)┎',
                ':gemes' => 'o(ˆ▽ˆ)-c<°︿°)p',
                ':grrr' => 'Щ(ºДºщ)',
                ':gunting' => '(" `з´),8<',
                ':hai' => '( ∩_∩ )づ Hⓐⓐⓘⓘ.',
                ':hiks' => '(∏﹏∏)',
                ':1hiks' => 'ಥ﹏ಥ',
                ':hm' => '(︶︿︶)',
                ':1hm' => '(︶﹏︶)',
                ':2hm' => '(´︿`“)',
                ':3hm' => '(ˇ_ˇ)',
                ':hore' => '\(´▽`)/',
                ':1hore' => 'ƪ(^▽^)ʃƪ(^o^)ʃ',
                ':2hore' => '↖(ˆ▽ˆ)↗',
                ':3hore' => '╮(^▽^)╭',
                ':hug' => '(っ˘з˘)っ',
                ':1hug' => '(づ￣³￣)づ',
                ':2hug' => '(っˆ зˆ)っ',
                ':3hug' => '(╭￣3￣)╭',
                ':huh' => 'o(‾^‾)o',
                ':1huh' => '( ۳ ˘̶̀• ̯•˘̶́ )۳',
                ':ingus' => '(̾˘̶̀̾̾•̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩ ̯•̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩̩˘̶́̾ ̾̾̾̾)',
                ':inlove' => '(ʃƪ´▽`)♥♡',
                ':1inlove' => '(๑\'⌣\'๑)づ♥',
                ':innocent' => '(з´⌣`ε)',
                ':1joget' => '(┌\'⌣\')┌',
                ':jahat' => 'Ψ(`▽´)σ',
                ':joget' => '┐(\'⌣\'┐)',
                ':kecewa' => '(╯• ε •╰)',
                ':kabur' => 'ε=ε=┏(`>_<´)┛',
                ':1kabur' => 'ε=ε=┏( ˆ▽ˆ)┛',
                ':kick' => 'ヽ( ･∀･)ﾉ┌┛Σ(ノ `Д´)ノ',
                ':1kick' => '\(#`⌂´)/┌',
                ':2kick' => 'ヽ("`д´)┌┛★)`з゜)',
                ':kiss' => '(˘˛˘)ε˘`)',
                ':1kiss' => '(ɔˆ ³(•˘▽˘•)',
                ':2kiss' => '(っˆ зˆ)ε ˆヘ)',
                ':kya' => '(≧▽≦)づ♥',
                ':lelah' => '(¯―¯٥)',
                ':mandi' => 'ヽ｀、ヽ｀ヽ(*￣o￣*)>ヽ｀、ヽ｀シャワー♪',
                ':marah' => '(ｏ`皿′ｏ)',
                ':1marah' => 'Ψ(╰_╯)Ψ',
                ':monster' => 'ƪ_(☉▿▿▿▿▿▿☉)_ʃ',
                ':no' => '(≧o≦)/',
                ':okay' => '(‎‏(◦\'ںˉ◦‏',
                ':ombak' => '`°•.¸¸.•°` `°•.¸¸.•°` `°•.¸¸.•°``°``°•.¸¸.•°‏',
                ':peace' => 'v(‘.’ )v',
                ':pray' => '(ˇʃƪˇ)',
                ':1pray' => '└(˘.˘└)',
                ':pug' => '┌П┐(►˛◄)づ♥',
                ':pukul' => '(¬_¬)ノ*(`>˛<´)',
                ':1pukul' => '(" `з´ )_,/"(`>_<´)',
                ':sedih' => '(✖╭╮✖)',
                ':1sedih' => '(⌣́_⌣̀)',
                ':sembah' => '\(‾▿‾\)',
                ':1sembah' => '(/‾▿‾)/',
                ':sabar' => '(⌣́_⌣̀)\(\'́⌣\'̀ )',
                ':selamat' => '(ˆ▿ˆʃƪ)',
                ':semangat' => 'ง^•^ง',
                ':semprot' => '( •_•)r鹵~<炎炎炎 (°ﾛ°)',
                ':senyum' => '(ں\'‏‎\')',
                ':shock' => '（　ﾟ Дﾟ）',
                ':1shock' => 'Σ( ° △ °|||) =',
                ':2shock' => '(°◇°)',
                ':3shock' => '(⊙◇⊙)',
                ':shot' => '(҂‾ ▵▵▵‾)︻╦̵̵̿╤─ \(˚▽˚\'!)/',
                ':shy' => '(ʃ⌣ƪ)',
                ':1shy' => '(┌_┐)',
                ':sing' => '( ˘ з˘ )♬♪',
                ':1sing' => '♫♪♫( ´▽｀)',
                ':sleepy' => '(Θ˛Θƪ)',
                ':suer' => 'Ɣ(άά)',
                ':1suer' => '(¯⌣¯)♉',
                ':tembak' => '(҂ `з´ ).︻╦̵̵̿╤── ƪ(°͡ o°")͡ʃ (•̯͡.•̯͡)"',
                ':throw' => '(╯‵Д′)╯彡┻━┻',
                ':1throw' => '(╮°-°)╮┳━┳',
                ':tinju' => '(¬_¬)--o(✗_✗)',
                ':1tinju' => '◎(￣^￣)====◎)>_<”)',
                ':2tinju' => '(Q"╰_╯)==○☆(x,☉“)',
                ':toast' => '(˛•̃•̃) / \(•̃•̃¸)',
                ':tunjuk' => '(σ`▽´)-σ',
                ':upil' => '(‾▿‾)-σ•',
                ':wekz' => 'ƪ(ړײ)‎ƪ',
                ':wew' => '(๑_๑)',
                ':1wew' => '(¯―¯)',
                ':2wew' => '(‾~‾“)',
                ':yeah' => '(งˆ▽ˆ)ง',
                ':yes' => '(^o^)/',
                ':yummy' => 'ƪ(˘ڡ˘)ʃ',
            ],
            'Arabic' => [
                ':alhamdulillah' => 'اَلْحَمْدُلِلّهِ',
                ':Allah' => 'اللّهُ',
                ':amin' => 'آمِيـنَ',
                ':assalamualaikum' => 'السَّلاَمُ عَلَيْكُمْ',
                ':astaghfirullah' => 'اَسْتَغْفِرُ اَللّهَ',
                ':bismillah' => 'بِسْمِ اللّهِ الرَّحْمَنِ الرَّحِيْمِ',
                ':halal' => 'حَلاَلً',
                ':insyaallah' => 'اِ نْ شَآ ءَ اللّهُ',
                ':masyaallah' => 'مَاشَآءَاللّهُ',
                ':subhanallah' => 'سُبْحَانَ اللّهُ',
                ':waalaikumsalam' => 'وَعَلَيْكُمْ السَّلاَمُ',
            ],
            'Text' => [
                ':anjing' => 'A̸̸N̸̸J̸̸I̸̸N̸̸G̸̸',
                ':bete' => '┏̲B̶̲̅┓̲┏̲E̶̲̅┓̲┏̲T̶̲̅┓̲┏̲E̶̲̅┓̲',
                ':bye' => 'ヾ(;ω;)Byeヾ(;ω;)Bye',
                ':cape' => '〖C〗〖A〗〖P〗〖E〗',
                ':exit' => '｡_(-＿-*)EXIT...!',
                ':hehe' => 'Ђĕђĕђĕ',
                ':haha' => 'HªhªhªHªhªِ',
                ':1haha' => '┣┫A┣┫Α┣┫A┣┫Α',
                ':2haha' => 'Ħαª☺Ħαª☺Ħαª☺◦ °˚☺',
                ':3haha' => '♥•ђåª•♥•ђåª•♥•ђåª•♥',
                ':hihi' => '●๋•нι..нι..нι..●๋•',
                ':hoahm' => 'HOoº°°ºoOam ((˘O˘")',
                ':huft' => '(⌣́_⌣̀) ‎​Ħϋ₣₣₣₣ττττ',
                ':ilu' => 'ℓ‎​​ơvє •♥_♥• Чơυ',
                ':imu' => 'ミ★ι мιѕѕ υ★彡',
                ':justkidding' => 'ĴůŞŧ ĶίđđίŇĝ',
                ':metbubuk' => 'мєt вυвυк..●๋•',
                ':metmalam' => ' ●๋•..мєt мαℓαм...',
                ':morning' => '•·· ģσσd мσяиιиģ ··•',
                ':ngantuk' => 'ミ★ηgαηtυк★彡',
                ':niceday' => '★º°˚˚☆ Have a ηice ϑay ☆º°˚*★',
                ':night' => '╰☆º°˚˚ GOODNIGHT º°˚* ☆╯',
                ':1night' => 'ε(*\' - \')з†.。*・☆Good Night☆・*。.†ε(\' - \'*)з',
                ':owh' => 'o˚°º☺ωнн',
                ':sip' => '(y)˚°◦(y);)•Siip♣Siip•({})(y)◦°˚(y)',
                ':sweetdream' => '☀ ѕωзεт dяεªм ☀',
                ':thankyou' => '° • · ♡·♥ τнänk чöü ♥·♡ · • °',
                ':tidak' => '\(≧∇≦)/ тι∂ααααααккккккккк..........!!!',
                ':wakakaka' => 'ωªκªκªκª',
                ':wkwk' => 'ЩĸЩĸЩĸЩĸЩĸЩĸЩĸЩĸِ',
                ':yup' => '≈♧‧ЎùúûüppppP‧♣≈'
            ],
        ];
    }

}
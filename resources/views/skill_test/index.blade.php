<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('スキルテスト') }}
        </h2>
    </x-slot>
    
        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!--ここにテストを書く-->
                    
                    <form action="/skill_tests" method=POST>
                        @csrf
                        <p class="p-6">問１.創立記念式典の開催後に上司から反省会を行いたいため担当した人にメールで
                        知らせるよう指示があった。<br>
                        以下の中から不適当と思われる件名を一つ選びなさい。<br>
                        <input type="hidden" name="question1" value="問1">
                        <input type="radio" name="answer1" value="1）創立記念式典の反省会について" {{ old ('answer1') == '1）創立記念式典の反省会について' ? 'checked' : '' }}>　1）創立記念式典の反省会について<br>
                        <input type="radio" name="answer1" value="2）創立記念式典の反省会について（連絡）" {{ old ('answer1') == '2）創立記念式典の反省会について（連絡）' ? 'checked' : '' }}>　2）創立記念式典の反省会について（連絡）<br>
                        <input type="radio" name="answer1" value="3）創立記念式典の反省会について（通知）" {{ old ('answer1') == '3）創立記念式典の反省会について（通知）' ? 'checked' : '' }}>　3）創立記念式典の反省会について（通知）<br>
                        <input type="radio" name="answer1" value="4）創立記念式典の反省会について（指示）" {{ old ('answer1') == '4）創立記念式典の反省会について（指示）' ? 'checked' : '' }}>　4）創立記念式典の反省会について（指示）<br>
                        <input type="radio" name="answer1" value="5）創立記念式典の反省会についてのお知らせ" {{ old ('answer1') == '5）創立記念式典の反省会についてのお知らせ' ? 'checked' : '' }}>　5）創立記念式典の反省会についてのお知らせ
                        </p>
                        
                        <p class="p-6">問２. 上司の外出中に取引先から電話があり、至急知らせたいことがあるので携帯電話の番号を教えてほしいといっている。<br>
                        このような場合、秘書はどのように伝えるのが良いか。適当と思われるものを一つ選びなさい。<br>
                        <input type="hidden" name="question2" value="問2">
                        <input type="radio" name="answer2" value="1）「他の人には教えないと約束するのなら教える」と言う。" {{ old ('answer2') == '1）「他の人には教えないと約束するのなら教える」と言う。' ? 'checked' : '' }}>　1）「他の人には教えないと約束するのなら教える」と言う。<br>
                        <input type="radio" name="answer2" value="2）「内容によっては教えるので，詳しいことを聞かせてもらいたい」と言う。" {{ old ('answer2') == '2）「内容によっては教えるので，詳しいことを聞かせてもらいたい」と言う。' ? 'checked' : '' }}>　2）「内容によっては教えるので，詳しいことを聞かせてもらいたい」と言う。<br>
                        <input type="radio" name="answer2" value="3）「教えないことになっているので，上司が戻るまで待ってもらいたい」と言う。" {{ old ('answer2') == '3）「教えないことになっているので，上司が戻るまで待ってもらいたい」と言う。' ? 'checked' : '' }}>　3）「教えないことになっているので，上司が戻るまで待ってもらいたい」と言う。<br>
                        <input type="radio" name="answer2" value="4）「上司に連絡を取って電話するよう伝えるので，少し待ってもらえないか」と言う。" {{ old ('answer2') == '4）「上司に連絡を取って電話するよう伝えるので，少し待ってもらえないか」と言う。' ? 'checked' : '' }}>　4）「上司に連絡を取って電話するよう伝えるので，少し待ってもらえないか」と言う。<br>
                        <input type="radio" name="answer2" value="5）「上司の許可がないと教えられないことになっているので，了承してもらいたい」と言う。" {{ old ('answer2') == '5）「上司の許可がないと教えられないことになっているので，了承してもらいたい」と言う。' ? 'checked' : '' }}>　5）「上司の許可がないと教えられないことになっているので，了承してもらいたい」と言う。
                        </p>
                        
                        <p class="p-6">問３. 上司の飲食費の立替精算をしています。社員全員参加する新年会の場合、次の勘定科目の中から適切なものを一つ選びなさい。<br>
                        <input type="hidden" name="question3" value="問3">
                        <input type="radio" name="answer3" value="1）交際費" {{ old ('answer3') == '1）交際費' ? 'checked' : '' }}>　1）交際費<br>
                        <input type="radio" name="answer3" value="2）会議費" {{ old ('answer3') == '2）会議費' ? 'checked' : '' }}>　2）会議費<br>
                        <input type="radio" name="answer3" value="3）福利厚生費" {{ old ('answer3') == '3）福利厚生費' ? 'checked' : '' }}>　3）福利厚生費<br>
                        <input type="radio" name="answer3" value="4）研修費" {{ old ('answer3') == '4）研修費' ? 'checked' : '' }}>　4）研修費<br>
                        <input type="radio" name="answer3" value="5）広告宣伝費" {{ old ('answer3') == '5）広告宣伝費' ? 'checked' : '' }}>　5）広告宣伝費
                        </p>
                        
                        <p class="p-6">問４. 次の用語の説明の中から不適当と思われるものを一つ選びなさい。<br>
                        <input type="hidden" name="question4" value="問4">
                        <input type="radio" name="answer4" value="1）「直接税」：納税者と税の負担者が同じ，例えば所得税などのことである。" {{ old ('answer4') == '1）「直接税」：納税者と税の負担者が同じ，例えば所得税などのことである。' ? 'checked' : '' }}>　1）「直接税」：納税者と税の負担者が同じ，例えば所得税などのことである。<br>
                        <input type="radio" name="answer4" value="2）「可処分所得」：所得税を計算するとき課税対象とならない所得のことである。" {{ old ('answer4') == '2）「可処分所得」：所得税を計算するとき課税対象とならない所得のことである。' ? 'checked' : '' }}>　2）「可処分所得」：所得税を計算するとき課税対象とならない所得のことである。<br>
                        <input type="radio" name="answer4" value="3）「累進課税」：所得金額が大きくなるほど税率が高くなる課税方式のことである。" {{ old ('answer4') == '3）「累進課税」：所得金額が大きくなるほど税率が高くなる課税方式のことである。' ? 'checked' : '' }}>　3）「累進課税」：所得金額が大きくなるほど税率が高くなる課税方式のことである。<br>
                        <input type="radio" name="answer4" value="4）「確定申告」：その年に納めるべき所得税を計算して税務署に報告することである。" {{ old ('answer4') == '4）「確定申告」：その年に納めるべき所得税を計算して税務署に報告することである。' ? 'checked' : '' }}>　4）「確定申告」：その年に納めるべき所得税を計算して税務署に報告することである。<br>
                        <input type="radio" name="answer4" value="5）「源泉徴収」：給与などを支払うときその金額から所得税などを天引きすることである。" {{ old ('answer4') == '5）「源泉徴収」：給与などを支払うときその金額から所得税などを天引きすることである。' ? 'checked' : '' }}>　5）「源泉徴収」：給与などを支払うときその金額から所得税などを天引きすることである。
                        </p>
                        
                        <p class="p-6">問５. 秘書に必要なスキルは多岐にわたりますが、以下の中から優先順位が低いものを一つ選びなさい。<br>
                        <input type="hidden" name="question5" value="問5">
                        <input type="radio" name="answer5" value="1）雑談力" {{ old ('answer5') == '1）雑談力' ? 'checked' : '' }}>　1）雑談力<br>
                        <input type="radio" name="answer5" value="2）洞察力" {{ old ('answer5') == '2）洞察力' ? 'checked' : '' }}>　2）洞察力<br>
                        <input type="radio" name="answer5" value="3）柔軟性" {{ old ('answer5') == '3）柔軟性' ? 'checked' : '' }}>　3）柔軟性<br>
                        <input type="radio" name="answer5" value="4）組織力" {{ old ('answer5') == '4）組織力' ? 'checked' : '' }}>　4）組織力<br>
                        <input type="radio" name="answer5" value="5）忍耐力" {{ old ('answer5') == '5）忍耐力' ? 'checked' : '' }}>　5）忍耐力<br>
                        
                        <button type="submit" class="p-6" style="background:gray;color:#ffffff;padding:5px;margin-top:25px">送信する</button>
                    </form>
                    
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
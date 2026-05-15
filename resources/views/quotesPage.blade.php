<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <ol list-style-type="none">
        @foreach ($quotes as $quote)
            <li>
                <div style="padding: 10px; margin:20px; border: 1px solid purple; border-radius: 10px; background-color: purple/50%;">
                    <ul>
                        <!-- <li>id: {{ $quote['id'] }} </li> -->
                        <li><b>Text:</b> {{ $quote['quote'] }} </li>
                        <li><b>Author:</b> {{ $quote['author'] }} </li>
                    </ul>
                </div>
            </li>
        @endforeach
    </ol>
</div>

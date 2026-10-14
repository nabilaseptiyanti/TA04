<div style="
    border: 1px solid {{ $type === 'error' ? 'red' : 'green' }};
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 4px;
">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>
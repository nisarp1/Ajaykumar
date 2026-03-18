/**
 * Chat Widgets Logic for Ajaykumar Sarnaik
 */

// Toggle Chat Window
function toggleChat(type) {
    const waWin = document.getElementById('waWindow');
    const aiWin = document.getElementById('aiWindow');
    
    if (type === 'wa') {
        waWin.classList.toggle('chat-open');
        aiWin.classList.remove('chat-open');
    } else {
        aiWin.classList.toggle('chat-open');
        waWin.classList.remove('chat-open');
    }
}

// Close Chat when clicking outside (Optional but good UX)
document.addEventListener('click', function(event) {
    const waWidget = document.getElementById('waWidget');
    const aiWidget = document.getElementById('aiWidget');
    
    if (!waWidget.contains(event.target) && !aiWidget.contains(event.target)) {
        document.getElementById('waWindow').classList.remove('chat-open');
        document.getElementById('aiWindow').classList.remove('chat-open');
    }
});

// WhatsApp Quick Reply
function waQuickReply(query) {
    const body = document.getElementById('waBody');
    const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    
    // Add user message
    const userMsg = `
        <div class="chat-bubble outgoing">
            <p>${query}</p>
            <span class="chat-time">${time}</span>
        </div>
    `;
    body.insertAdjacentHTML('beforeend', userMsg);
    
    // Auto scroll
    body.scrollTop = body.scrollHeight;
    
    // Typing indicator
    const typing = `
        <div class="typing-indicator" id="waTyping">
            <span></span><span></span><span></span>
        </div>
    `;
    body.insertAdjacentHTML('beforeend', typing);
    body.scrollTop = body.scrollHeight;
    
    // Responses
    const replies = {
        'Biography': 'Shri Ajaykumar Sarnaik is a prominent statesman with over 4 decades of clean service. He served as a Minister of Youth Services & Sports and a Member of Parliament.',
        'Focus Areas': 'His primary focus is on Agricultural Prosperity, Youth Empowerment, and Cooperative Governance through BDCC Bank.',
        'Constituency Office': 'The constituency office is in Bagalkot. You can call +91 999 999 9999 for direct assistance.',
        'Join Movement': 'You can join the movement by visiting the "Join the Movement" page on our website and filling out the volunteer form.'
    };
    
    setTimeout(() => {
        document.getElementById('waTyping').remove();
        const replyText = replies[query] || 'Thank you for reaching out. Someone from our office will get back to you shortly.';
        const botMsg = `
            <div class="chat-bubble incoming">
                <p>${replyText}</p>
                <span class="chat-time">${new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</span>
            </div>
        `;
        body.insertAdjacentHTML('beforeend', botMsg);
        body.scrollTop = body.scrollHeight;
    }, 1200);
}

// AI Message Logic
function sendAiMessage() {
    const input = document.getElementById('aiInput');
    const body = document.getElementById('aiBody');
    const query = input.value.trim();
    
    if (!query) return;
    
    const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    
    // Add user message
    const userMsg = `
        <div class="chat-bubble outgoing">
            <p>${query}</p>
            <span class="chat-time">${time}</span>
        </div>
    `;
    body.insertAdjacentHTML('beforeend', userMsg);
    input.value = '';
    body.scrollTop = body.scrollHeight;
    
    // Typing indicator
    const typing = `
        <div class="typing-indicator" id="aiTyping">
            <span></span><span></span><span></span>
        </div>
    `;
    body.insertAdjacentHTML('beforeend', typing);
    body.scrollTop = body.scrollHeight;
    
    // Simple AI simulation (Prototype)
    setTimeout(() => {
        document.getElementById('aiTyping').remove();
        
        let response = "";
        const q = query.toLowerCase();
        
        if (q.includes('who') && q.includes('ajay')) {
            response = "Shri Ajaykumar Sarnaik is a veteran leader of the Indian National Congress, known for his work in the cooperative banking sector and sports development in Karnataka.";
        } else if (q.includes('parliament') || q.includes('mp')) {
            response = "He served in the 12th Lok Sabha (1998) representing Bagalkot and has a record of raising critical infrastructure and agricultural issues in Parliament.";
        } else if (q.includes('sports') || q.includes('minister')) {
            response = "As the former Minister of Youth Services & Sports, he organized the National Games in Bangalore and pioneered several sports reforms in Karnataka.";
        } else if (q.includes('bank') || q.includes('bdcc')) {
            response = "Since 2004, he has been the President of Bagalkot DCC Bank, where he has revolutionized rural credit for farmers and local businesses.";
        } else if (q.includes('contact') || q.includes('address')) {
            response = "You can contact the office at Bagalkot or email contact@ajaykumarsarnaik.com. Our helpline is also available via the WhatsApp widget on the left.";
        } else {
            response = "I am Janmitra AI, focusing on information regarding the service and vision of Shri Ajaykumar Sarnaik. Could you please specify if you'd like to know about his Biography, Political Journey, or Focus Areas?";
        }
        
        const botMsg = `
            <div class="chat-bubble incoming ai-bubble">
                <p>${response}</p>
                <span class="chat-time">${new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</span>
            </div>
        `;
        body.insertAdjacentHTML('beforeend', botMsg);
        body.scrollTop = body.scrollHeight;
    }, 1500);
}

// AI Quick Replies
function aiQuickReply(query) {
    document.getElementById('aiInput').value = query;
    sendAiMessage();
}

(function() {
  'use strict';

  const PUSHER_INSTANCE_LOCATOR = 'PUSHER_INSTANCE_LOCATOR';

  // ----------------------------------------------------
  // Chat Details
  // ----------------------------------------------------
 
  let chat = {
    messages: [],
    room: undefined,
    userId: undefined,
    currentUser: undefined,
  };

  // ----------------------------------------------------
  // Targeted Elements
  // ----------------------------------------------------

  const chatPage = $(document);
  const chatWindow = $('.chatbubble');
  const chatHeader = chatWindow.find('.unexpanded');
  const chatBody = chatWindow.find('.chat-window');

  // ----------------------------------------------------
  // Helpers
  // ----------------------------------------------------

  let helpers = {
    /**
     * Toggles the display of the chat window.
     */
    ToggleChatWindow: function() {
      chatWindow.toggleClass('opened');
      chatHeader
        .find('.title')
        .text(
          chatWindow.hasClass('opened')
            ? 'Minimize Chat Window'
            : 'Chat with Support'
        );
    };

  // ----------------------------------------------------
  // Register page event listeners
  // ----------------------------------------------------

  chatPage.ready(helpers.ShowAppropriateChatDisplay);
  chatHeader.on('click', helpers.ToggleChatWindow);
  chatBody.find('#loginScreenForm').on('submit', helpers.LogIntoChatSession);
  chatBody.find('#messageSupport').on('submit', helpers.SendMessageToSupport);
})();  
import numberedListTwig from '../templates/paragraph--kan-numbered-list.html.twig';
import numberedListItemTwig from '../templates/paragraph--kan-numbered-list-item.html.twig';

import numberedListData from '../data/kan_numbered_list.yml';
import numberedListItemData from '../data/kan_numbered_list_item.yml';

export default {
  title: 'Kanponents/Numbered List',
};

export const NumberedList = numberedListTwig(numberedListData);
export const NumberedListItem = numberedListItemTwig(numberedListItemData);
